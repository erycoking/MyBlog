@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body mb-2">
                <h4><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                <small>written on: {{ $post->created_at }} by {{ $post->user->name }}</small>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif

@endsection
