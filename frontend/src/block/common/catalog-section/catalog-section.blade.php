<div class="{{ $block }}" data-entity="{{ $containerName }}">
    @if (!empty($itemComponents))
        @foreach ($itemComponents as $itemComponent)
            {!! $itemComponent !!}
        @endforeach
    @endif
</div>