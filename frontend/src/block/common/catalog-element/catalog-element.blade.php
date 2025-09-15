<div class="{{ $block }}">
    <div class="{{ $block->elem('content') }}" data-entity="images-container" style="cursor: zoom-in;">
        <img class="{{ $block->elem('img') }}" id="{{ $itemIds['PICT'] }}" src="{{ $arResult['DETAIL_PICTURE']['SRC'] }}" data-entity="image" data-id="37"></img>
    </div>
    <div class="{{ $block->elem('content') }}">
        @if (!empty($arResult['COUNTRIES_STRING']))
            <span class="{{ $block->elem('property') }}">{!! $arResult['COUNTRIES_STRING'] !!}</span>
        @endif
        @if (!empty($arResult['SUBJECT_STRING']))
            <span class="{{ $block->elem('property') }}">{!! $arResult['SUBJECT_STRING'] !!}</span>
        @endif
    </div>
</div>