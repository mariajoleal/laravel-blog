@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Articles Blog</h1>
    </div>
  </div>
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-md-4">
        <div class="card" style="width: 18rem; ">
          <img src="..." class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $post['title']}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('blog.article', ['id' => array_search($post, $posts)]) }}" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection