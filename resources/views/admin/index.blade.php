@extends('layouts.admin')

@section('content')
  @if(Session::has('info'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('info') }}                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
        </div>
      </div>
  @endif
  <div class="row">
    <div class="col-md-12">
      <a class="btn btn-success" href="{{ route('admin.create') }}">New article</a>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Article</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{$post->title}}</td>
              <td align="center">
                <a style="color:#80bdff;" href="{{ route('admin.edit', ['id' => $post->id ]) }}">Edit</a> <br/>
                <a style="color:#80bdff;" href="{{ route('admin.delete', ['id' => $post->id ]) }}">Delete</a> <br/>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection