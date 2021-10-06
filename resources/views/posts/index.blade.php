<x-layout>

    @include('posts/_header')

    <main class="mx-auto mt-6 space-y-6 max-w-7xl lg:mt-20">

        @if ($posts->count())
            <x-posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
        <p class="text-center">No Posts Yet, Please Check back later.</p>
        @endif
    </main>
</x-layout>
