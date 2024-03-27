<x-layout>
    <section class="px-6 py-8">
        <x-panel>
            <form method="POST"
                  action="/admin/posts"
            >
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="title"
                    >
                        Title
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="title"
                           id="title"
                           required
                           value={{ old('title') }}
                    >

                    @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="slug"
                    >
                        Slug
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                           type="text"
                           name="slug"
                           id="slug"
                           required
                           value={{ old('slug') }}
                    >

                    @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="excerpt"
                    >
                        Excerpt
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full"
                              name="excerpt"
                              id="excerpt"
                              required
                    >{{ old('excerpt') }}</textarea>

                    @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>


                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="body"
                    >
                        Body
                    </label>

                    <textarea class="border border-gray-400 p-2 w-full"
                              name="body"
                              id="body"
                              required
                    >
                        {{ old('body') }}
                    </textarea>

                    @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                           for="categoryId"
                    >
                        Category
                    </label>

                    <select name="categoryId" id="categoryId">
                        @php
                            $categories = \App\Models\Category::all();
                        @endphp

                        @foreach($categories as $category)
                        <option
                            value={{ $category->id }}
                        {{ old('$category_id') == $category->id ? 'selected' : '' }}
                        >
                            {{ ucwords($category->name) }}
                        </option>
                        @endforeach

                    </select>

                    @error('categoryId')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div>

{{--                <x-submit-button>Publish</x-submit-button>--}}
                <input type="submit" value="Publish"
                       class="p-2 rounded-md bg-blue-500 text-white font-semibold uppercase text-xs px-10 py-2 cursor-pointer
        hover:bg-blue-600"
                />
            </form>
        </x-panel>
    </section>
</x-layout>
