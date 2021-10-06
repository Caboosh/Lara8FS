@props(['name', 'type' => 'text'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <input class="w-full p-2 border border-gray-300 rounded-md"
        type="{{ $type }}"
        id="{{ $name }}"
        name="{{ $name }}"
        value="{{ old($name) }}"
        {{ $attributes }} required>

    <x-form.error name="{{ $name }}" />
</x-form.field>
