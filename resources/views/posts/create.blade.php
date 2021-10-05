<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-3xl p-6 mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl">
            <h1 class="mb-8 text-2xl font-bold text-center">
                Create New Post
            </h1>
            <form action="/admin/posts" method="post" enctype="multipart/form-data">
                @csrf

                <x-form.input name="title"/>
                <x-form.input name="slug"/>
                <x-form.input name="thumbnail" type="file"/>

                <x-form.textarea name="excerpt"/>
                <x-form.textarea name="body" rows="8"/>

                <x-form.field>
                    <x-form.label name="category"/>
                    <select class="w-full p-2 border border-gray-400 rounded-md" id="category_id" name="category_id" required>
                        @foreach (\App\Models\Category::all() as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    <x-form.error name="category"/>
                </x-form.field>

                <x-form.button name="Publish Post"/>
            </form>
        </main>
    </section>
</x-layout>
