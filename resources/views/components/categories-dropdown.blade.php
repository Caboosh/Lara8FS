
<div class="relative bg-gray-100 border border-black lg:inline-flex rounded-xl border-opacity-10">
    <x-dropdown>
        <x-slot name="trigger">
            <button class="flex w-full py-2 pl-3 text-sm font-semibold pr-9 lg:w-40 lg:inline-flex">

                {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px" />
            </button>
        </x-slot>
        <x-dropdown-list>
        <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}" :active='request()->routeIs("home")'> All </x-dropdown-item>

        @foreach ($categories as $category)
            <x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}" :active='request()->is("/?category={$category->slug}")'>
                {{ ucwords($category->name) }}
            </x-dropdown-item>
        @endforeach
        </x-dropdown-list>
    </x-dropdown>
</div>
