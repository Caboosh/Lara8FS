@props(['trigger'])


<div x-data="{ show: false }" @click.away="show = false" style="position: relative" {{ $attributes->merge(['class'=> ""]) }}>
    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- Data --}}
    {{ $slot }}
</div>
