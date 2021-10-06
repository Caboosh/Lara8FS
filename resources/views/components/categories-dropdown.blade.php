
<div class="relative bg-gray-100 border border-black lg:inline-flex rounded-xl border-opacity-10">
    <x-dropdown>
        <x-slot name="trigger">
            <button class="flex w-full py-2 pl-3 text-sm font-semibold pr-9 lg:w-40 lg:inline-flex">

                {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px" />
            </button>
        </x-slot>
        <x-dropdown-list>
        <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" class="{{ request()->routeIs('home') ? 'bg-blue-400 text-white' : ''}}"> All </x-dropdown-item>

        @foreach ($categories as $category)
            <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">
                {{ ucwords($category->name) }}
            </x-dropdown-item>

        @endforeach
        </x-dropdown-list>

    </x-dropdown>
</div>
{{-- request()->is("/?category={$category->slug}") ? 'bg-blue-400 text-white' : '' --}}
