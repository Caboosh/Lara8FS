<!doctype html>

<title>Admin | Laravel From Scratch Blog</title>
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

            <div class="flex items-center mt-8 md:mt-0">
                <x-dropdown class="inline-flex text-xs font-semibold text-black uppercase bg-gray-200 rounded-lg">
                    <x-slot name="trigger">
                        <button class="flex w-full py-2 pl-3 pr-6 text-xs font-semibold uppercase lg:inline-flex lg:w-40">
                            {{ Auth::user()->name }} <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 6px; bottom: 5px;" />
                        </button>
                    </x-slot>
                    <x-dropdown-list class="mt-9">
                        <x-dropdown-item href="/admin/dashboard" class="{{ request()->is('admin/dashboard') ? 'bg-blue-400 text-white' : ''}}">Dashboard</x-dropdown-item>
                        <x-dropdown-item href="/admin/posts/create" class="{{ request()->is('admin/posts/create') ? 'bg-blue-400 text-white' : '' }}">New Post</x-dropdown-item>
                        <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Logout</x-dropdown-item>
                        <form id="logout-form" class="hidden" action="/logout" method="post">
                            @csrf
                        </form>
                    </x-dropdown-list>
                </x-dropdown>
            </div>
        </nav>

        {{ $slot }}

        <footer id="newsletter" class="px-10 py-16 mt-16 text-center bg-gray-100 border border-black border-opacity-5 rounded-xl">
            <img src="/images/lary-newsletter-icon.svg" alt="" class="mx-auto -mb-6" style="width: 145px;">
            <h5 class="text-3xl">Stay in touch with the latest posts</h5>
            <p class="mt-3 text-sm">Promise to keep the inbox clean. No bugs.</p>

            <div class="mt-10">
                <div class="relative inline-block mx-auto rounded-full lg:bg-gray-200">
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
