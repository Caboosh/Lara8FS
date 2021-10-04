<!doctype html>

<title>Laravel From Scratch Blog</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <nav class="md:flex md:justify-between md:items-center">
            <div>
                <a href="/">
                    <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="#newsletter" class="px-5 py-3 mr-3 text-xs font-semibold text-white uppercase bg-blue-500 rounded-full">
                    Subscribe for Updates
                </a>
                @auth
                    <span class="text-xs font-bold uppercase">{{ Auth::user()->name }}</span> | <form class="inline-flex" action="/logout" method="post"> @csrf
                            <button type="submit" class="p-2 text-xs font-semibold text-white uppercase bg-gray-400 rounded-lg hover:bg-gray-500"> Logout </button>
                    </form>
                @endauth

                @guest
                    <a href="/register" class="p-2 text-xs font-semibold text-white uppercase bg-gray-400 rounded-lg hover:bg-gray-500">Register</a> |
                    <a href="/login" class="p-2 text-xs font-semibold text-white uppercase bg-gray-400 rounded-lg hover:bg-gray-500">Login</a>
                @endguest
            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter" class="px-10 py-16 mt-16 text-center bg-gray-100 border border-black border-opacity-5 rounded-xl">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="mt-3 text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto rounded-full lg:bg-gray-200">

                    <form method="POST" action="/newsletter" class="text-sm lg:flex">
                        @csrf
                        <div class="flex items-center lg:py-3 lg:px-5">
                            <label for="email" class="hidden lg:inline-block">
                                <img src="/images/mailbox-icon.svg" alt="mailbox letter">
                            </label>

                            <div>
                                <input id="email" name="email" type="email" placeholder="Your email address"
                                class="py-2 pl-4 lg:bg-transparent lg:py-0 focus-within:outline-none">
                                @error('email')
                                    <p class="mt-1 text-xs text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        <button type="submit"
                                class="px-8 py-3 mt-4 text-xs font-semibold text-white uppercase transition-colors duration-300 bg-blue-500 rounded-full hover:bg-blue-600 lg:mt-0 lg:ml-3"
                        >
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </footer>
        @foreach (['error', 'warning', 'success'] as $status)
            @if(Session::has($status))
                <x-flash type="{{ $status }}">
                    {{ Session::get($status) }}
                </x-flash>
            @endif
        @endforeach
    </section>
</body>
