@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary mb-2">Go Back</a>
    <img src="/storage/cover_images/{{ $post->cover_image }}" alt="noimage.jpg" style="width : 100%;">
    <br><br>
    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-md btn-secondary ml-auto">Edit</a>
            <form action="/posts/{{ $post->id }}" method="POST" class="form float-right mr-auto">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-md btn-danger">Delete</button>
            </form>
        @endif
    @endif
@endsection
