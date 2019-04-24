@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary mb-2">Go Back</a>
    <h1>Create Post</h1>
    <div class="center">
        <form action="/posts/{{ $post->id }}" method="POST" class="form">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="title">Enter title</label>
                <input id="title" class="form-control" type="text" name="title" value="{{ $post->title }}">
            </div>
            <div class="form-group">
                <label for="article-ckeditor">Enter Body</label>
                <textarea id="article-ckeditor" class="form-control" type="text" rows="10" name="body" value="{{ $post->body }}"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
