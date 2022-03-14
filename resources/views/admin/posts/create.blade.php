<h1>Cadastrar Novo Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @include('admin.posts._partials.form')
</form>
