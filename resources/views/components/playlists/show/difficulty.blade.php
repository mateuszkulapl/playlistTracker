@props(['difficulty', 'id'])
<div class="difficulty my-1 block left-21">
    <span @class([
        'cursor-pointer w-7 h-7 mx-1 rounded block relative group/setdifficulty border border-slate-300',
        'bg-slate-300' => $difficulty == 0,
        'bg-green-900' => $difficulty == 1,
        'bg-lime-500' => $difficulty == 2,
        'bg-yellow-500' => $difficulty == 3,
        'bg-orange-500' => $difficulty == 4,
        'bg-red-500' => $difficulty == 5,
    ])>
        <div @class([
            'hidden absolute group-hover/setdifficulty:flex z-50 bg-slate-200 gap-1 py-1',
            '-top-1',
            'left-0' => $difficulty == 0,
            '-left-8' => $difficulty == 1,
            '-left-16' => $difficulty == 2,
            '-left-24' => $difficulty == 3,
            '-left-32' => $difficulty == 4,
            '-left-40' => $difficulty == 5,
        ])>
            @for ($i = 0; $i <= 5; $i++)
                <span title="Poziom trudności: {{ $i }}" wire:click="setDifficulty({{ $i }})" @class([
                    'cursor-pointer w-7 h-7 rounded block border border-slate-300',
                    'hover:ring-1 hover:ring-blue-800',
                    'bg-slate-300' => $i == 0,
                    'bg-green-900' => $i == 1,
                    'bg-lime-500' => $i == 2,
                    'bg-yellow-500' => $i == 3,
                    'bg-orange-500' => $i == 4,
                    'bg-red-500' => $i == 5,
                    'border-slate-800' => $i == $difficulty,
                ])>
                </span>
            @endfor
        </div>
    </span>
</div>
