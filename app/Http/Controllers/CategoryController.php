<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getCategories() {
        $categories = Category::all();
        return view('admin.categories', ['categories' => $categories]);
    }

    public function getCreateCategory() {
        return view('admin.createCategory');
    }

    public function postCreateCategory(Request $request) {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category = new Category([
            'name' => $request->input('name')
        ]);
        $category->save();
        return redirect()->route('admin.categories')->with('info', 'Category created: ' . $request->input('name'));
    }

    public function getEditCategory($id) {
        $category = Category::find($id);
        return view('admin.editCategory', ['category' => $category, 'categoryId' => $id]);
    }
    
    public function postUpdateCategory(Request $request) {
        $this->validate($request, [
            'name' => 'required'
        ]);
        $category = Category::find($request->input('id'));
        $category->name = $request->input('name');
        $category->save();
        return redirect()->route('admin.categories')->with('info', 'Category updated, new name: ' . $request->input('name'));
    }

    public function deleteCategory($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.categories')->with('info', 'Category deleted ');
    }
}
