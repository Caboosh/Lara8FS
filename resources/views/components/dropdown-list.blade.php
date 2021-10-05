<div x-show="show" {{ $attributes->merge(['class'=> "absolute z-50 w-full py-2 mt-2 overflow-auto bg-gray-100 border border-black rounded-xl border-opacity-10 max-h-52"]) }} style="display: none">
    {{ $slot }}
</div>
