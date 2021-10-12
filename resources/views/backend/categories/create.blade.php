<x-backend.layout>
    <x-backend.setting heading="Posts">
        <h4 class="mb-4 text-xl font-semibold text-left border-b border-gray-300">
            Create New Category
         </h4>
        <form action="/admin/categories" method="post">
            @csrf

            <x-form.input name="name"/>
            <x-form.input name="slug"/>

            <x-form.button name="Publish Category"/>
        </form>
    </x-backend.setting>
</x-backend.layout>
