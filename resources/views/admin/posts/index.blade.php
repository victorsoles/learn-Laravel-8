<h1>POSTS</h1>

<a href="{{ route('posts.create') }}">Criar Novo Post</a>

@foreach ($posts as $post)
    <h2>{{ $post->titulo }}</h2>
    <h3>{{ $post->subtitulo }}</h3>
    <p> {{ $post->conteudo }}</p>

@endforeach
