<div x-data="{ show: false }" @click.away="show = false">

    {{-- Trigger --}}
    <div @click="show = ! show">
        {{ $trigger }}
    </div>

    {{-- Data --}}
    <div x-show="show" class="py-2 absolute mt-2 w-full bg-gray-100 rounded-xl z-50 border border-black border-opacity-10 overflow-auto max-h-52" style="display: none">
        {{ $slot }}
    </div>
</div>
