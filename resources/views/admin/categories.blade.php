@extends('layouts.admin')

@section('content')
  @if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
          <p class="alert alert-info">{{ Session::get('info') }}</p>
        </div>
      </div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <a class="btn btn-success" href="{{ route('admin.createCategory') }}">New category</a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      @foreach ($categories as $category)
        <p><strong>{{$category->name}}</strong> 
          <a href="{{ route('admin.editCategory', ['id' => $category->id ]) }}"> Edit </a>
          <a href="{{ route('admin.deleteCategory', ['id' => $category->id ]) }}"> Delete </a>
        </p>
      @endforeach
    </div>
  </div>
@endsection