@extends('layouts.app')


@section('content')
    <h1>{{ $title }}</h1>
    <ul class="list-group">
        @if (count($services))
            @foreach ($services as $item)
                <li class="list-group-item">{{ $item }}</li>
            @endforeach
        @endif
    </ul>
@endsection
