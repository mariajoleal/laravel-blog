@extends('layouts.admin')

@section('content')
  @include('partials.errors')
  <div class="row">
    <div class="col-md-12">
      <form action="{{ route('admin.update') }}" method="post">
        <div class="form-group">
          <label for="title">Title</label>
          <input name="title" type="text" class="form-control" id="title" value="{{ $data['title'] }}">
        </div>
        <div class="form-group">
          <label for="content">Content</label>
          <input name="content" type="text" class="form-control" id="content" value="{{ $data['content'] }}">
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
@endsection