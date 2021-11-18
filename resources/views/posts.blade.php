@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center">
	<div class="col-md-6">
		<form action="/posts">
			<div class="input-group mb-3">
				<input type="text" class="form-control" placeholder="Search.." name="keyword" value="{{ request('keyword') }}">
				<button class="btn btn-primary" type="submit">Search</button>
			</div>
		</form>
	</div>
</div>

@if ($posts->count())
	<div class="container">
		<div class="row">
			@foreach ($posts as $post)
			<div class="col-md-4">
				<div class="card mb-3">
					<div class="position-absolute bg-light m-1 px-3 py-2 opacity-75 rounded-pill">
						<a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-dark">
							{{ $post->category->slug }}
						</a>
					</div>
					@if ($post->image)
						<img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
					@else
						<img src="https://source.unsplash.com/400x200?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
					@endif
					<div class="card-body">
						<h5 class="card-title fs-4"><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h5>
						<p>
							By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
							{{ $post->created_at->diffForHumans() }}
						</p>
						<p class="card-text">{{ $post->excerpt }}</p>
						<a href="/posts/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
@else
	<p class="text-center fs-3">No Post Found!</p>
@endif

<div class="d-flex justify-content-center my-4">
	{{ $posts->links() }}
</div>

@endsection()