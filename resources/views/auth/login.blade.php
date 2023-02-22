<x-layouts.app title="Login">

    <body class="antialiased bg-slate-100 dark:bg-slate-900">
        <header class="px-6 py-4 space-y-2 text-center">
            <h1 class="font-bold text-3xl dark:text-sky-500">Login</h1>
        </header>
    </body>

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="container mx-auto px-48">

            <div class="mb-6">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Email
                </label>
                <input name="email" type="email" value="{{ old('email') }}" id="default-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('email')
                    <small style="color: red"> {{ $message }} </small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Password </label>
                <input name="password" type="password" id="default-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('password')
                    <small style="color: red"> {{ $message }} </small>
                @enderror
            </div>

            <label class="flex items-center">
                <span class="cursor-pointer ml-2 font-serif text-slate-600 dark:text-slate-400">
                    Remember me?
                </span>
                &nbsp;
                &nbsp;
                <input class="border rounded dark:bg-slate-900 dark:border-slate-800 border-slate-300 dark:border-slate-700 text-sky-700 focus:border-sky-300 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50"
                       name="remember"
                       type="checkbox"
                >
            </label>
 

        </div>



        <div class="px-6 py-4 space-y-2 text-center">
            <button class="bg-gray-700 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded">Login</button>
            <a href="{{ route('register') }}" class="bg-gray-700 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded"
                type="submit">Register</a>
        </div>
    </form>
</x-layouts.app>
