<x-layouts.app title="Blog">

    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-bold text-3xl dark:text-sky-500">Blog</h1>
        <br>
        <a class="bg-gray-700 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded"
            href="{{ route('posts.create') }}">Create new post</a>
    </header>

    <body class="antialiased bg-slate-100 dark:bg-slate-900">

        <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">
            @foreach ($posts as $post)
                <div>

                    <h2 class="text-xl text-slate-600 dark:text-slate-100 hover:underline">
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post->title }}
                        </a>
                    </h2>

                    <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200"
                        href="{{ route('posts.edit', $post) }}">Edit</a>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            class="inline-flex items-center text-xs font-semibold tracking-widest text-center text-red-500 uppercase transition duration-150 ease-in-out dark:text-red-500/80 hover:text-red-600 focus:outline-none"
                            type="submit">Delete</button>
                    </form>


                </div>
            @endforeach
        </main>

    </body>
</x-layouts.app>
