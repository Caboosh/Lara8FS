<x-backend.layout>
    <x-backend.setting heading="Users">
        <h4 class="mb-4 text-xl font-semibold text-left border-b border-gray-300">
           All Users
        </h4>
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <x-backend.table-heading name="Name" class="text-center"/>
                        <x-backend.table-heading name="Username" class="text-center"/>
                        <x-backend.table-heading name="Email Address" class="text-center"/>
                        <x-backend.table-heading name="Action" class="text-center"/>
                    </tr>
                    </thead>
                    @foreach ($users as $user)
                    <tbody class="text-center bg-white divide-y divide-gray-200">
                        <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="ml-4">
                                <div class="text-sm font-medium text-gray-900">
                                {{$user->name}}
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{$user->username}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm font-medium text-gray-900">
                                {{$user->email}}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm font-medium text-center whitespace-nowrap">
                            <a href="#" class="px-2 py-1 text-indigo-600 transition-colors duration-300 bg-indigo-100 rounded-md hover:bg-indigo-700 hover:text-indigo-200">Edit</a> |
                            <a href="#" class="px-2 py-1 text-red-600 transition-colors duration-300 bg-red-100 rounded-md hover:bg-red-700 hover:text-red-200">Delete</a>
                        </td>
                        </tr>

                        <!-- More people... -->
                    </tbody>
                    @endforeach
                    <div class="m-4">
                        {{ $users->links() }}
                    </div>
                </table>
                </div>
            </div>
            </div>
        </div>
    </x-backend.setting>
</x-backend.layout>
