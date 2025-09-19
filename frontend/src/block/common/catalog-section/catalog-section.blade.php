<div class="{{ $block }} catalog-section bx-{{ $arParams['TEMPLATE_THEME'] }}" data-entity="{{ $containerName }}">
    @foreach ($arResult['ITEM_ROWS'] as $rowData)
        <div class="{{ $block->elem('row') }} row product-item-list-col-3" data-entity="items-row">
            @foreach (array_splice($itemComponents, 0, $rowData['COUNT']) as $itemComponent)
                <div class="{{ $block->elem('item') }}">
                    {!! $itemComponent !!}
                </div>
            @endforeach
        </div>
    @endforeach
</div>