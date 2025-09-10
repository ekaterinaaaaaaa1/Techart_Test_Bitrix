<div class="{{ $block }}">
    <span class="{{ $block->elem('date') }}">{!! isset($arItem['FIELDS']['TAGS']) ? date('d.m.Y', strtotime($arItem['FIELDS']['TAGS'])) : '' !!}</span>
    <h2 class="{{ $block->elem('title') }}">{!! isset($arItem["NAME"]) ? $arItem["NAME"] : '' !!}</h2>
    <p class="{{ $block->elem('announce') }}">{!! isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : '' !!}</p>
    <a class="{{ $block->elem('button') }} button" href="/news/{{ $arItem['ID'] }}/">
        <span class="{{ $block->elem('text') }} button-text">Подробнее</span>
        <img class="{{ $block->elem('arrow') }}" src="{{ \TAO::frontendUrl('img/icons/arrow.svg'); }}" data-active="{{ \TAO::frontendUrl('img/icons/active_arrow.svg'); }}" alt="Стрелка"></img>
    </a>
</div>