@extends('frontend.layouts.master')

@section('main-content')
    <div>
        @foreach ($posts as $post)
            <h2>
                {{ $post->title }}
            </h2>
            <div>
                <a href="{{ route('categories.index', $post->category->id) }}"><mark>{{ $post->category->name }}</mark></a>
                <br>
                {!! $post->description !!}
                <br>

                <a href="{{ route('posts.show', $post->id) }}">
                    View Post
                </a>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
