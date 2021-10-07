@props(['name', 'rows' => '2', 'columns' => '1'])

<x-form.field>
    <x-form.label name="{{ $name }}" />

    <textarea class="w-full p-2 border border-gray-300 rounded-md"
        id="{{ $name }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        columns="{{ $columns }}" required>
        {{ $slot ?? old($name) }}
    </textarea>

    <x-form.error name="{{ $name }}" />
</x-form.field>
