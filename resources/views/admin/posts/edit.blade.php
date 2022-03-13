<h1>Editar o Post <strong>{{ $post->titulo }}</strong></h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('put')

    <input type="text" name="titulo" id="titulo" placeholder="Título" value="{{ $post->titulo }}">
    <input type="text" name="subtitulo" id="subtitulo" placeholder="Subtítulo" value="{{ $post->subtitulo }}">
    <textarea name="conteudo" id="conteudo" cols="30" rows="4" placeholder="Texto">{{ $post->conteudo }}</textarea>
    <button type="submit">Enviar</button>
</form>
