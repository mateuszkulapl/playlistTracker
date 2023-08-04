Ukończone lekcje {{ $start->isoFormat('DD.MM.YYYY') }} - {{ $end->isoFormat('DD.MM.YYYY') }}:

@foreach ($watchedGroups as $groupName => $watchedElements)
    {{ $groupName }}:
    @foreach ($watchedElements as $watchedElement)
        {{ $watchedElement->title }}
        @if (!$loop->last)
            ,
        @endif
    @endforeach
@endforeach
