<x-layouts.app title="Blog"></x-layouts.app>
<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="font-bold text-3xl dark:text-sky-500">Create new post</h1>
</header>

<body class="antialiased bg-slate-100 dark:bg-slate-900">
<div class="text-white">

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
    
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{ route('posts.index') }}">Volver al blog</a>
        
</div>
</body>