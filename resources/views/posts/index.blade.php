@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card card-body mb-2">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img src="/storage/cover_images/{{ $post->cover_image }}" alt="noimage.jpg" style="width : 100%;">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h4><a href="posts/{{ $post->id }}">{{ $post->title }}</a></h4>
                        <small>written on: {{ $post->created_at }} by {{ $post->user->name }}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No posts found</p>
    @endif

@endsection
