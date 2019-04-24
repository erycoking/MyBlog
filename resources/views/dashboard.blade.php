@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <a href="/posts/create" class="btn btn-secondary">Create Post</a>
                    <h3 class="card-title">Yours posts</h3>
                    @if (count($posts) > 0)
                        <table class="table table-dark">
                            <thead>
                                <th>Title</th>
                                <th>Created On</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td><h5 class="card-title"><a href="posts/{{ $post->id }}" class="">{{ $post->title }}</a></h5></td>
                                        <td><small>written on: {{ $post->created_at }}</small></td>
                                        <td>
                                            <form action="/posts/{{ $post->id }}" method="POST" >
                                                @csrf
                                                <input id="_method" type="hidden" name="_method" value="DELETE">
                                                <a href="/posts/{{ $post->id }}/edit" class="btn btn-secondary btn-md">Edit</a> |
                                                <button type="submit" class="btn btn-danger btn-md">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <h5 class="card-title">You have no Posts</h5>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
