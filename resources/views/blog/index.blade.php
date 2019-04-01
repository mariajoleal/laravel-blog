@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-md-12 text-center">
      <h1>Articles Blog</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card" style="width: 18rem; ">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{ route('blog.article', ['id' => 1]) }}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{ route('blog.article', ['id'=> 2]) }}" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="{{ route('blog.article', ['id' => 3]) }}" class="btn btn-primary">Read more</a>
        </div>
      </div>
    </div>
  </div>
@endsection