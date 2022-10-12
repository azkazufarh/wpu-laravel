@extends('layouts.main')

@section('container')

    <h1>{{ $title }}</h1>

    <div class="row">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1600x400/?{{ $posts[0]->category->name }}" class="card-img-top" alt="...">
            <div class="card-body">
                <a href="/posts/{{ $posts[0]->slug }}"><h3 class="card-title">{{ $posts[0]->title }}</h3></a>
                <p>
                    <small class="text-muted">
                        By <a href="/authors/{{ $posts[0]->user->username }}">{{ $posts[0]->user->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                        <div class="col-md-4 mb-2">
                            <div class="card">
                                <img src="https://source.unsplash.com/400x400/?{{ $post->category->name }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <a href="/blog/{{ $post->slug }}"><h2>{{ $post->title }}</h2></a>
                                    <p>By <a href="/authors/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                                    <p>{{ $post->excerpt }}</p>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>

    @else
        
    @endif
    


@endsection