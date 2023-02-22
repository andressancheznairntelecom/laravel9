<div class="container mx-auto px-48">

    <div class="mb-6">
        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> Title </label>
        <input name="title" type="text" value="{{ old('title', $post->title) }}" id="default-input"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        @error('title')
            <small style="color: red"> {{ $message }} </small>
        @enderror
    </div>
    <div class="mb-6">
        <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Body</label>
        <textarea name="body" type="text" value="{{ old('title', $post->title) }}" id="default-input"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">{{ old('body', $post->body) }}</textarea>
        @error('body')
            <small style="color: red"> {{ $message }} </small>
        @enderror
    </div>

</div>
