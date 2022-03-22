@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="file" name="imagem" id="image">
<input type="text" name="titulo" id="titulo" placeholder="Título" value="{{ $post->titulo ?? old('titulo') }}">
<input type="text" name="subtitulo" id="subtitulo" placeholder="Subtítulo" value="{{ $post->subtitulo ?? old('subtitulo') }}">
<textarea name="conteudo" id="conteudo" cols="30" rows="4" placeholder="Texto">{{ $post->conteudo ?? old('conteudo') }}</textarea>
<button type="submit">Enviar</button>
