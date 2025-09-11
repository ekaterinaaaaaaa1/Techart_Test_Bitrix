<div class="{{ $block }}">
    <div class="{{ $block->elem('content') }} {{ $block->elem('message') }}">
        <span class="{{ $block->elem('date') }}">{!! isset($arResult['TAGS']) ? date('d.m.Y', strtotime($arResult['TAGS'])) : '' !!}</span>
        <h2 class="{{ $block->elem('announce') }}">{!! isset($arResult['PREVIEW_TEXT']) ? $arResult['PREVIEW_TEXT'] : '' !!}</h2>
        <div class="{{ $block->elem('detail-text') }}">{!! isset($arResult['DETAIL_TEXT']) ? $arResult['DETAIL_TEXT'] : '' !!}</div>
        @if (!empty($arResult['THEMES_STRING']))
            <div class="{{ $block->elem('themes') }}">
                <span class="{{ $block->elem('theme-string') }}">{!! $arResult['THEMES_STRING'] !!}</span>
            </div>
        @endif
        <a class="{{ $block->elem('button')->mod('active') }}" href="/news/">
            <img class="{{ $block->elem('arrow')->mod('active') }}"></img>
            <span class="{{ $block->elem('button-text') }} {{ $block->elem('button-text')->mod('active') }}">Назад к новостям</span>
        </a>
    </div>
    <div class="{{ $block->elem('content') }}">
        <img class="{{ $block->elem('img') }}" src="{!! isset($arResult['DETAIL_PICTURE']['SRC']) ? $arResult['DETAIL_PICTURE']['SRC'] : '' !!}" alt="Новость">
    </div>
</div>