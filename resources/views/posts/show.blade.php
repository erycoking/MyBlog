@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary mb-2">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <div>
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <hr>
    <a href="/posts/{{ $post->id }}/edit" class="btn btn-md btn-secondary ml-auto">Edit</a>
    <form action="/posts/{{ $post->id }}" method="POST" class="form float-right mr-auto">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit" class="btn btn-md btn-danger">Delete</button>
    </form>
@endsection
