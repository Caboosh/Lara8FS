<x-layout>
    @foreach ($posts as $post)
        <article>
            <h1><a href="posts/{{ $post->slug }}">{{ $post->title }}</a></h1>
            <h4>Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h4>
            <div>
                {{ $post->excerpt }}
            </div>
        </article>
    @endforeach
</x-layout>
