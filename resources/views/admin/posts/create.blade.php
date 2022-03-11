<h1>Cadastrar Novo Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="titulo" id="titulo" placeholder="Título">
    <input type="text" name="subtitulo" id="subtitulo" placeholder="Subtítulo">
    <textarea name="conteudo" id="conteudo" cols="30" rows="4" placeholder="Texto"></textarea>
    <button type="submit">Enviar</button>
</form>
