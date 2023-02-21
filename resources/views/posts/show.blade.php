<x-layouts.app title="Blog"></x-layouts.app>

<h1>
    {{ $post->title }}
</h1>

<p>
    {{ $post->body }}
</p>

<a href="{{ route('posts.index') }}">Volver al blog</a>