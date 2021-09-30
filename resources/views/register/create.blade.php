<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mt-10 mx-auto bg-gray-100 p-6 border border-gray-200 rounded-xl">
            <h1 class="text-2xl mb-8 text-center font-bold">
                Register New User
            </h1>
            <form action="/register" method="post">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="name">
                        {{ __('Name') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded-md"
                           type="text"
                           id="name"
                           name="name"
                           value=""
                           required>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="username">
                        {{ __('username') }}
                    </label>
                    <input class="w-full p-2 border rounded-md border-gray-400"
                           type="text"
                           id="username"
                           name="username"
                           value=""
                           required>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="email-address">
                        {{ __('Email Address') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded-md"
                           type="email"
                           id="email-address"
                           name="email"
                           value=""
                           required>
                </div>

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="password">
                        {{ __('password') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded-md"
                           type="password"
                           id="password"
                           name="password"
                           value=""
                           required>
                </div>

                <div class="mb-6">
                    <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"> Submit </button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
