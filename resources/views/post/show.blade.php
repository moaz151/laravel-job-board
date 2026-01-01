<x-layout :title="$pageTitle">
    <h2> {{ $post->title }} </h2>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>

    <ul class="mt-6 space-y-4">
        @foreach ($post->comments as $comment)
            <li class="p-4 bg-gray-100 rounded-md shadow-sm">
              <p class="text-gray-800"> {{ $comment->content }} </p>
              <span class="mt-1 text-sm text-gray-600">__ {{ $comment->author }} </span>
            </li>
        @endforeach
    </ul>


    <form method="POST" action="/comment" class="mt-8">
    @CSRF
    <input type="hidden" name="post_id" value="{{ $post->id }}">
  

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

            <div class="sm:col-span-3">
            <label for="author" class="block text-sm/6 font-medium text-gray-900">Your Name</label>
            <div class="mt-2">
                <input type="text" name="author" value=" {{ old('author') }}" autocomplete="family-name" class="{{ $errors->has('author') ? 'outline-red-300' : 'outline-gray-300' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
            </div>
            @error('author')
                <span class="text-red-500"> {{ $message }} </span>
            @enderror
            </div>
        </div>

        <div class="col-span-full">
          <label for="body" class="block text-sm/6 font-medium text-gray-900">Your Comment</label>
          <div class="mt-2">
            <textarea name="content" rows="4" class="{{ $errors->has('body') ? 'outline-red-500' : 'outline-gray-500' }} block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1  placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">{{ old('body') }}</textarea>
          </div>
          <p class="mt-3 text-sm/6 text-gray-600">Write your Comment here.</p>
          @error('body')
            <span class="text-red-500"> {{ $message }} </span>
          @enderror
        </div>

      </div>
    </div>
  </div>

  <div class="mt-6 flex items-center justify-end gap-x-6">
    <a href="/blog" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
  </div>

</form>


</x-layout>