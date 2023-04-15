@props(['rating', 'id'])
<div class="flex items-center group/rate ">
    @for ($i = 1; $i <= 5; $i++)
        <svg title="{{ $i }}/5" aria-hidden="true" wire:click="rate({{ $i }})" @class([
            'w-5 h-5 stroke-gray-600 cursor-pointer',
            'hover:text-blue-300',
            'peer peer-hover:text-gray-300',
            'group-hover/rate:text-yellow-400',
            'text-yellow-500' => $i <= $rating,
            'text-gray-200' => $i > $rating,
        ]) fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <x-star />
        </svg>
    @endfor

</div>
