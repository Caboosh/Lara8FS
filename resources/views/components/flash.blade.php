@props([
    'type' => 'success',
    'colours' => [
        'success'   => 'bg-blue-500 text-white',
        'warning'   => 'bg-yellow-500 text-black',
        'error'     => 'bg-red-500 text-black'
    ]
])

<div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show="show"
    class="fixed {{ $colours[$type] }} py-2 px-4 text-sm rounded-xl bottom-3 right-3">
    <p>
        {{ $slot }}
    </p>
</div>
