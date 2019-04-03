@extends('layouts.admin')

@section('content')
  @include('partials.errors')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('admin.updateCategory') }}" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input name="name" type="text" class="form-control" id="title" value="{{ $category->name }}">
        </div>
        {{ csrf_field() }}
        <input type="hidden" name="id" value={{ $categoryId }}>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection