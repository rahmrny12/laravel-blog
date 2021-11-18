@extends('layouts.main')

@section('container')
<h1 class="mb-5">Post Categories</h1>

<div class="container">
  <div class="row">
    @foreach ($categories as $category)
      <div class="col-md-4">
        <a href="/posts?category={{ $category->slug }}">
          <div class="card bg-dark text-white">
            <img src="https://source.unsplash.com/400x200?{{ $category->name }}" class="card-img" alt="{{ $category->name }}">
            <div class="card-img-overlay d-flex align-items-center bg-dark opacity-75">
              <h5 class="card-title text-center">{{ $category->name }}</h5>
            </div>
          </div>
        </a>
      </div>
    @endforeach
  </div>
</div>

@endsection()