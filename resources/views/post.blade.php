@extends('layouts.main')

@section('container')
    <article class="mx-4">
        <h1>{{ $post->title }}</h1>
        <p>By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1600x400/?{{ $post->category->name }}" class="img-fluid" alt="...">
        
        {!! $post->body !!}
    <a href="/posts">Back to posts</a>
    </article>
@endsection
