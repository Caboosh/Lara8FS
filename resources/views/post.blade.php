<x-layout>
    <article>
        <h1>{{ $post->title }}</h1>
        <h4>{{ $post->excerpt }}</h4><h4>Published on: {{ date('F j, Y',$post->date) }} </h4>

         {!! $post->body !!}
        <a href="/">Go Back</a>
    </article>
</x-layout>
