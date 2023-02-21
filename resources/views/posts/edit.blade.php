<x-layouts.app title="Blog"></x-layouts.app>

<h1>
    Edit Form
</h1>


<form action="{{ route('post.update', $post) }}" method="POST">
    @csrf @method('PATCH')
    @include('posts.form-fields')
    <button type="submit">Enviar</button>
</form>
<br>
<a href="{{ route('posts.index') }}">Volver al blog</a>
