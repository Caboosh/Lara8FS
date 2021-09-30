<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg p-6 mx-auto mt-10 bg-gray-100 border border-gray-200 rounded-xl">
            <h1 class="mb-8 text-2xl font-bold text-center">
                Login
            </h1>
            <form action="/sessions" method="post">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 text-xs font-bold text-gray-700 uppercase"
                           for="email">
                        {{ __('Email Address') }}
                    </label>
                    <input class="w-full p-2 border border-gray-400 rounded-md"
                           type="email"
                           id="email"
                           name="email"
                           value="{{ old('email') }}"
                           required>

                       @error('email')
                           <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                       @enderror
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
                       @error('password')
                           <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                       @enderror
                </div>

                <div class="mb-6">
                    <button type="submit" class="px-4 py-2 text-white bg-blue-400 rounded hover:bg-blue-500"> Login </button>
                </div>
            </form>
        </main>
    </section>

</x-layout>
