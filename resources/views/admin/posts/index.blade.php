<h1>POSTS</h1>

@if (session('message'))
    <div>
        {{ session('message') }}
    </div>
@endif

<a href="{{ route('posts.create') }}">Criar Novo Post</a>

@foreach ($posts as $post)
    <h2>
        {{ $post->titulo }}
        [ <a href="{{ route('posts.show', $post->id) }}">Ver</a> ]
    </h2>
    {{-- <h3>{{ $post->subtitulo }}</h3>
    <p> {{ $post->conteudo }}</p> --}}


@endforeach
