@extends('admin.layouts.app')

@section('title', 'Listagem dos Posts')

@section('content')

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<h1>POSTS</h1>

<form action="{{ route('posts.search') }}" method="post">
    @csrf

    <input type="text" name="search" placeholder="Filtrar:">
    <button type="submit">Filtrar</button>
</form>

<a href="{{ route('posts.create') }}">Criar Novo Post</a>

@foreach ($posts as $post)
    <h2>
        {{ $post->titulo }}
        [
            <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
            <a href="{{ route('posts.edit', $post->id )}}">Edit</a>
        ]
    </h2>
@endforeach

<hr>

@if (isset($filters))
    {{ $posts->appends($filters)->links() }}
@else
    {{ $posts->links() }}
@endif



@endsection
