<x-layouts.app title="Blog"></x-layouts.app>

<h1>
    Edit Form
</h1>
<form action="{{ route('posts.update', $posts) }}" method="POST">
    @csrf @method('PATCH')
    <label>
        Title <br>
        <input name="title" type="text"  value="{{ old('title', $posts->title) }}">
        <br>
        @error('title') 
            <small style="color: red"> {{ $message }} </small>
        @enderror
    </label><br>
    <label>
        Body<br>
        <textarea name="body">{{ old('title', $posts->title) }}</textarea><br>
        @error('body')
            <small style="color: red"> {{$message}} </small>
        @enderror
    </label><br>
    <button type="submit">Enviar</button>
</form>
<br>
<a href="{{ route('posts.index') }}">Volver al blog</a>