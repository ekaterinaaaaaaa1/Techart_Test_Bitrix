<div class="{{ $block }}">
    <div class="{{ $block->elem('content') }}">
        <img class="{{ $block->elem('img') }}" src="{{ $arResult['DETAIL_PICTURE']['SRC'] }}"></img>
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