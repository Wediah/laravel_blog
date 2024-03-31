<x-layout>
    <x-setting heading="Publish New Post">
        <form method="POST"
              action="/admin/posts"
              enctype="multipart/form-data"
        >
            @csrf

            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt" />
            <x-form.textarea name="body" />





            <x-form.field>
                <x-form.label name="category_id" />

                <select name="category_id" id="category_id">
                    @foreach(\App\Models\Category::all() as $category)
                        <option
                            value={{ $category->id }}
                            {{ old('$category_id') == $category->id ? 'selected' : '' }}
                        >
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach

                </select>

                <x-form.error name="category" />
            </x-form.field>

            {{--                <x-submit-button>Publish</x-submit-button>--}}
            <input type="submit" value="Publish"
                   class="p-2 mt-2 rounded-md bg-blue-500 text-white font-semibold uppercase text-xs px-10 py-2
                       cursor-pointer
        hover:bg-blue-600"
            />
        </form>
    </x-setting>

</x-layout>
