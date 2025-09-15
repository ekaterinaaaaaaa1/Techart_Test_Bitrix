<div class="{{ $block }}" data-entity="{{ $containerName }}">
    @foreach ($arResult['ITEM_ROWS'] as $rowData)
        <div class="{{ $block->elem('row') }}" data-entity="items-row">
            @foreach (array_splice($itemComponents, 0, $rowData['COUNT']) as $itemComponent)
                <div class="{{ $block->elem('item') }}">
                    {!! $itemComponent !!}
                </div>
            @endforeach
        </div>
    @endforeach
</div>