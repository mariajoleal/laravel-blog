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
        <h6>Categories:</h6>
        <ul>
          @foreach ($categories as $category)
            <li>{{ $category->name }}</li>           
          @endforeach
        </ul>
        <h6>Comments:</h6>
        <ul>
          @foreach ($comments as $comment)
            <li>{{ $comment->text }}</li>           
          @endforeach
        </ul>
      </div>
    </div>
@endsection