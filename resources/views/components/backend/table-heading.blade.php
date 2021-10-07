@props(['name'])

<th scope="col" {{ $attributes->merge(['class' => 'px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase']) }}>
    {{$name}}
</th>
