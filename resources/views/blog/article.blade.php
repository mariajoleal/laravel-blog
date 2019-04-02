@extends('layouts.master')

@section('content')
    <div class="row">
      <div class="col-md-12">
        <h1 >{{ $post->title }}</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <p>{{ $post->content }}</p>
      </div>
    </div>
@endsection