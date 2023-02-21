<x-layouts.app title="Blog"></x-layouts.app>
<h1>
   Create new post
</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <label>
        Title <br>
        <input name="title" type="text"  value="{{ old('title') }}">
        <br>
        @error('title') 
            <small style="color: red"> {{ $message }} </small>
        @enderror
    </label><br>
    <label>
        Body<br>
        <textarea name="body"></textarea><br>
        @error('body')
            <small style="color: red"> {{$message}} </small>
        @enderror
    </label><br>
    <button type="submit">Enviar</button>
</form>
<br>
<a href="{{ route('posts.index') }}">Volver al blog</a>