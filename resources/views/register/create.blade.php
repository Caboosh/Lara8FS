<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto">
            <h1 class="text-4xl mb-4">
                <span class="text-blue-500">Register New User</span>
            </h1>
            <form action="/register" method="post">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="username">
                        {{ __('username') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded"
                           type="text"
                           id="username"
                           name="username"
                           value=""
                           required>
                </div>

            </form>
        </main>
    </section>
</x-layout>
