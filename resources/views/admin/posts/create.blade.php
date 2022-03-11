<h1>Cadastrar Novo Post</h1>

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="titulo" id="titulo" placeholder="Título" value="{{ old('titulo')}}">
    <input type="text" name="subtitulo" id="subtitulo" placeholder="Subtítulo" value="{{ old('subtitulo')}}">
    <textarea name="conteudo" id="conteudo" cols="30" rows="4" placeholder="Texto">{{ old('conteudo') }}</textarea>
    <button type="submit">Enviar</button>
</form>
