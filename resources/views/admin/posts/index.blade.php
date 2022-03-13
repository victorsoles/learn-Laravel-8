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
        [
            <a href="{{ route('posts.show', $post->id) }}">Ver</a> |
            <a href="{{ route('posts.edit', $post->id )}}">Edit</a>
        ]
    </h2>
@endforeach

<hr>

{{ $posts->links() }}
