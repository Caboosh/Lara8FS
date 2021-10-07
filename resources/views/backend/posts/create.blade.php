<x-backend.layout>
    <x-backend.setting heading="Posts">
        <h4 class="mb-4 text-xl font-semibold text-left border-b border-gray-300">
            Create New Post
         </h4>
        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf

            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>

            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body" rows="8"/>

            <x-form.field>
                <x-form.label name="category"/>
                <select class="w-full p-2 border border-gray-300 rounded-md" id="category_id" name="category_id" required>
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <x-form.error name="category"/>
            </x-form.field>

            <x-form.button name="Publish Post"/>
        </form>
    </x-backend.setting>
</x-backend.layout>
