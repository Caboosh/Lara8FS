<x-backend.layout>
    <x-backend.setting heading="Dashboard |  Welcome Back, {{ auth()->user()->name }}!">
        <h4 class="mb-4 text-xl font-semibold text-left border-b border-gray-300">
           Recent Posts
        </h4>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <x-backend.table-heading name="Title" class="text-center"/>
                            <x-backend.table-heading name="Category" class="text-center"/>
                            <x-backend.table-heading name="Author" class="text-center"/>
                            <x-backend.table-heading name="Action" class="text-center"/>
                        </tr>
                        </thead>
                        @foreach ($posts as $post)
                        <tbody class="text-center bg-white divide-y divide-gray-200">
                            <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{$post->title}}</div>
                                <div class="text-sm text-gray-500">{!! Str::limit($post->excerpt, 100) !!}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-md">
                                {{$post->category->name}}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="">
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                    {{$post->author->name}}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                    {{$post->author->email}}
                                    </div>
                                </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                                <a href="/admin/posts/{{$post->id}}/edit" class="px-2 py-1 text-indigo-600 transition-colors duration-300 bg-indigo-100 rounded-md hover:bg-indigo-700 hover:text-indigo-200">Edit</a> |
                                <form action="/admin/posts/{{$post->id}}" method="post" class="inline-flex">
                                    @csrf
                                    @method('DELETE')
                                    <button class="px-2 py-1 text-red-600 transition-colors duration-300 bg-red-100 rounded-md hover:bg-red-700 hover:text-red-200">Delete</a>
                                </form>
                            </td>
                        </tr>

                        <!-- More people... -->
                    </tbody>
                    @endforeach
                </table>
                </div>
            </div>
            </div>
        </div>
    </x-backend.setting>
</x-backend.layout>
