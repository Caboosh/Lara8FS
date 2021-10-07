<x-backend.layout>
    <x-backend.setting heading="Editing">
        <h4 class="mb-4 text-xl font-semibold text-left border-b border-gray-300">
            Create New Post
         </h4>
         {{-- {{dd('est')}} --}}
         <form action="/admin/posts" method="post" enctype="multipart/form-data">
             @csrf
            <x-form.input name="title" :value="old('title', $post->title)"/>
            <x-form.input name="slug" :value="old('slug', $post->slug)"/>
            <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $post->thumbnail)"/>
            <x-form.textarea name="excerpt">{{ old('excerpt', $post->excerpt) }}</x-form.textarea>
            <x-form.textarea name="body">{{old('body', $post->body)}}</x-form.textarea>
                <x-form.field>
                    <x-form.label name="category"/>
                    <select class="w-full p-2 border border-gray-300 rounded-md" id="category_id" name="category_id" required>
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}" {{ old('category_id' == $category->id ? 'selected' : '') }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category"/>
                </x-form.field>

                <x-form.button name="Update Post"/>

         </form>
    </x-backend.setting>
</x-backend.layout>
