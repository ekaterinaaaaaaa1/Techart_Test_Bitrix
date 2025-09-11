<div class="{{ $block }}">
    <span class="{{ $block->elem('date') }}">{!! isset($arItem['FIELDS']['TAGS']) ? date('d.m.Y', strtotime($arItem['FIELDS']['TAGS'])) : '' !!}</span>
    <h2 class="{{ $block->elem('title') }}">{!! isset($arItem["NAME"]) ? $arItem["NAME"] : '' !!}</h2>
    <p class="{{ $block->elem('announce') }}">{!! isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : '' !!}</p>
    <a class="{{ $block->elem('button') }} {{ $block->elem('button')->mod('active') }}" href="/news/{{ $arItem['ID'] }}/">
        <span class="{{ $block->elem('button-text') }} {{ $block->elem('button-text')->mod('active') }}">Подробнее</span>
        <img class="{{ $block->elem('arrow') }} {{ $block->elem('arrow')->mod('active') }}"></img>
    </a>
</div>