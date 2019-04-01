@extends('layouts.admin')

@section('content')
    <div class="row">
      <div class="col-md-12">
        <a class="btn btn-success" href="{{ route('admin.create') }}">New article</a>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-md-12">
        <p><strong>Learning laravel</strong> <a href="{{ route('admin.edit', ['id' => 1]) }}"> Edit </a></p>
      </div>
    </div>
@endsection