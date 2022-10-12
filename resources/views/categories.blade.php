@extends('layouts.main')

@section('container')
    
    @foreach ($categories as $category)
        <article class="mx-2">
            <ul>
                <li>
                    <a href="/categories/{{ $category->slug }}"><h2>{{ $category->name }}</h2></a>
                </li>
            </ul>
        </article>
    @endforeach


@endsection