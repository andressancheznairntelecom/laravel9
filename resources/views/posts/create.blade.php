<x-layouts.app title="Blog"></x-layouts.app>
<h1>
    Create new post
</h1>


<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    @include('posts.form-fields')

    <button type="submit">Enviar</button>
</form>
<br>
<a href="{{ route('posts.index') }}">Volver al blog</a>
