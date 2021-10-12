<x-backend.layout>
    <x-backend.setting heading="Editing">
        <h4 class="mb-4 text-xl font-semibold text-left border-b border-gray-300">
            Edit Category
         </h4>
         <form action="/admin/categories/{{ $category->id }}" method="post">
             @csrf
             @method('PATCH')
            <x-form.input name="name" :value="old('name', $category->name)"/>
            <x-form.input name="slug" :value="old('slug', $category->slug)"/>

            <x-form.button name="Update Category"/>

         </form>
    </x-backend.setting>
</x-backend.layout>
