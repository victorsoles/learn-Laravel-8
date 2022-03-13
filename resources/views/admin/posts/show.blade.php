<h1>Detalhes do Post: {{ $post->titulo }}</h1>

<ul>
    <li><strong>Título :</strong>{{ $post->titulo }}</li>
    <li><strong>Subtítulo: </strong>{{ $post->subtitulo }}</li>
    <li><strong>Conteúdo: </strong>{{ $post->conteudo}}</li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar</button>
</form>
