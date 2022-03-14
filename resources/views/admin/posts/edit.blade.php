@extends('admin.layouts.app')

@section('title', "Editar o Post {$post->titulo}")

@section('content')

<h1>Editar o Post <strong>{{ $post->titulo }}</strong></h1>

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @method('put')
    @include('admin.posts._partials.form')
</form>

@endsection
