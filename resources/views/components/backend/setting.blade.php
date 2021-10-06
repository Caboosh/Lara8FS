@props(['heading' => ''])

<section class="max-w-full px-6 py-8 mx-auto">
    <h1 class="pb-2 mb-8 text-2xl font-bold border-b">
        {{ $heading }}
    </h1>
    <div class="flex">
    <x-backend.aside-nav />
        <main class="flex-1">
            <x-backend.panel>
                {{ $slot }}
            </x-backend.panel>
        </main>
    </div>

</section>
