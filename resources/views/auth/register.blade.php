<x-layouts.app title="Register">

    <body class="antialiased bg-slate-100 dark:bg-slate-900">
        <header class="px-6 py-4 space-y-2 text-center">
            <h1 class="font-bold text-3xl dark:text-sky-500">Register</h1>
        </header>
    </body>

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="container mx-auto px-48">

            <div class="mb-6">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Name
                </label>
                <input autofocus="autofocus" name="name" type="text" value="{{ old('name') }}" id="default-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('name')
                    <small style="color: red"> {{ $message }} </small>
                @enderror
            </div>
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
            <div class="mb-6">
                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Password Confirmation </label>
                <input name="password_confirmation" type="password"
                    id="default-input"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('password_confirmation')
                    <small style="color: red"> {{ $message }} </small>
                @enderror
            </div>

        </div>



        <div class="px-6 py-4 space-y-2 text-center">
            <a class="bg-gray-700 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded"
                href="{{ route('login') }}">Login</a>
            <button class="bg-gray-700 hover:bg-sky-500 text-white font-bold py-2 px-4 rounded"
                type="submit">Register</button>
        </div>
    </form>
</x-layouts.app>
