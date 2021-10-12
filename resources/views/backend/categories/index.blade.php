<x-backend.layout>
    <x-backend.setting heading="Posts">
        <h4 class="mb-4 text-xl font-semibold text-left border-b border-gray-300">
           All Categories
        </h4>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <x-backend.table-heading name="Category Name" class="text-center"/>
                        <x-backend.table-heading name="Category Slug" class="text-center"/>
                    </tr>
                    </thead>
                    @foreach ($categories as $category)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{$category->name}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                    {{$category->slug}}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                            <a href="/admin/posts/{{$category->id}}/edit" class="px-2 py-1 text-indigo-600 transition-colors duration-300 bg-indigo-100 rounded-md hover:bg-indigo-700 hover:text-indigo-200">Edit</a> |
                            <a href="/admin/posts/{{$category->id}}/delete" class="px-2 py-1 text-red-600 transition-colors duration-300 bg-red-100 rounded-md hover:bg-red-700 hover:text-red-200">Delete</a>
                        </td>
                        </tr>
                    </tbody>
                    @endforeach
                    <div class="m-4">
                        {{ $categories->links() }}
                    </div>
                </table>
                </div>
            </div>
            </div>
        </div>
    </x-backend.setting>
</x-backend.layout>
