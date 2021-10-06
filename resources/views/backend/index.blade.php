<x-backend.layout>
    <x-backend.setting heading="Dashboard |  Welcome Back, {{ auth()->user()->name }}!">
        <h4 class="text-xl font-semibold text-left border-b border-gray-300">
           Recent Posts
        </h4>
        @if ($posts->count())
            <x-backend.posts-grid :posts="$posts" />

            {{ $posts->links() }}
        @else
        <p class="text-center">No Posts Yet, Please Check back later.</p>
        @endif
    </x-backend.setting>
</x-backend.layout>
