<x-layouts.app title="Blog"></x-layouts.app>
<header class="px-6 py-4 space-y-2 text-center">
    <h1 class="font-bold text-3xl dark:text-sky-500">Edit Form</h1>
</header>

<body class="antialiased bg-slate-100 dark:bg-slate-900">
    <form action="{{ route('post.update', $post) }}" method="POST">
        @csrf @method('PATCH')
        @include('posts.form-fields')
        <div class="px-6 py-4 space-y-2 text-center">
            <a class="bg-gray-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded" href="{{ route('posts.index') }}">Volver al blog</a>
            <button class="bg-gray-700 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded" type="submit">Enviar</button>
        </div>
    </form>
</body>
