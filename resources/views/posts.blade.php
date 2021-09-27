<x-layout>

    @include('_posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

        <x-post-featured-card :post="$posts[0]" />

        <div class="lg:grid lg:grid-cols-2">
            @foreach ($posts->skip(1) as $post)
                <x-post-card :post="$post" />
            @endforeach
        </div>
    </main>


    @foreach ($posts as $post)
        {{-- <article>
            <h1><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <h4>Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h4>
            <h4>By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></h4>
            <div>
                {{ $post->excerpt }}
            </div>
        </article> --}}
    @endforeach
</x-layout>
