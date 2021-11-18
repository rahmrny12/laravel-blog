@extends('layouts.main')

@section('container')

<div class="row justify-content-center mb-2">
    <div class="col-md-8">
        <h1 class="mb-1">{{ $post->title }}</h1>

        <p>
            By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
            in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a>
        </p>

        @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
            </div>
        @else
            <img src="https://source.unsplash.com/900x400?{{ $post->category->name }}" class="card-img-top mt-3" alt="{{ $post->category->name }}">
        @endif
        
        <article class="my-3">
            {!! $post->body !!}
        </article>

        <a href="/posts" class="d-block mt-5">Back To Posts</a>
    </div>
    @include('layouts.comments')
</div>

@endsection