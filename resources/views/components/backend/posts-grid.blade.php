@props(['posts'])

    @if ($posts->count() > 1)
        <div class="lg:grid lg:grid-cols-6">
            @foreach ($posts as $post)
                <x-backend.post-card :post="$post" class="col-span-2" />
            @endforeach
        </div>
    @endif

