Ukończone lekcje {{ $start->isoFormat('DD.MM.YYYY') }} - {{ $end->isoFormat('DD.MM.YYYY') }}:

@foreach ($watchedGroups as $category)
    {{ $category->name }}:
    @foreach ($category->watchedElements as $watchedElement)
        {{ $loop->iteration }}.{!! $watchedElement->title !!}@if (!$loop->last){!!",  \r\n"!!}@endif
    @endforeach


@endforeach
