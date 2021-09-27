<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <h4>{{ $post->excerpt }}</h4><h4>Published on: {{ date('F j, Y',$post->date) }}, By: <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></h4>
        <h4>Category: <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h4>

         <p>{!! $post->body !!}</p>

        <a href="/">Go Back</a>
    </article>
</x-layout>
