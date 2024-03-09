@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments" >
            @csrf

            <header class="flex gap-4 items-center">
                <img src="https://i.pravatar.cc/100?u={{ auth()->id() }}" alt="" class="rounded-full"
                     height="40" width="40">
                <h2>Want to participate?</h2>
            </header>

            <div class="mt-6 mb-2">
                            <textarea name="body" id=""  rows="5" class="w-full text-sm focus:outline-none
                            focus:ring p-2 rounded-xl" placeholder="Quick,think of something to say" required></textarea>

                @error('body')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end border-t border-gray-200 pt-4">
                <input type="submit" value="Post" class="p-2 rounded-md bg-blue-500 text-white font-semibold
                        uppercase text-xs px-10 py-2 cursor-pointer hover:bg-blue-600">
            </div>
        </form>
    </x-panel>
@else
    <p class="semi-bold"><a href="/register" class="underline">Register</a> or <a href="/login"
                                                                                  class="underline">Log in </a> to
        leave a
        comment</p>
@endauth
