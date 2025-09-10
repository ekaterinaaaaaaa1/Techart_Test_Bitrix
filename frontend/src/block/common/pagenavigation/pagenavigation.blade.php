<div class="{{ $block }}">
    <div class="{{ $block->elem('numbers') }}">
        @if ($arResult["NavPageNomer"] + $pageSwitchButtonCount <= $arResult["NavPageCount"] + 1)
            @for ($i = 0; $i < $pageSwitchButtonCount; $i++)
                <a class="{{ $block->elem('number-link') }}" href="/news{{ $themeParam }}/page-{{ $arResult['NavPageNomer'] + $i }}/">
                    <button class="{{ $block->elem('number') }} button button-text">
                        {{ $arResult["NavPageNomer"] + $i }}
                    </button>
                </a>
            @endfor
        @else
            @for ($i = $pageSwitchButtonCount - 1; $i >= 0; $i--)
                <a class="{{ $block->elem('number-link') }}" href="/news{{ $themeParam }}/page-{{ $arResult['NavPageCount'] - $i }}/">
                    <button class="{{ $block->elem('number') }} button button-text">
                        {{ $arResult["NavPageCount"] - $i }}
                    </button>
                </a>
            @endfor
        @endif
    </div>
    <a class="{{ $block->elem('arrow-link') }}" href="/news{{ $themeParam }}/page-{{ $arResult['NavPageNomer'] + 1 }}/">
        <button class="{{ $block->elem('arrow') }} button button-text" @if ($arResult['NavPageNomer'] == $arResult['NavPageCount']) style="display: none;" @endif>
            <img class="{{ $block->elem('arrow-img') }}" src="{{ \TAO::frontendUrl('img/icons/next_page_arrow.svg'); }}" data-active="{{ \TAO::frontendUrl('img/icons/active_next_page_arrow.svg'); }}" alt="Стрелка"></img>
        </button>
    </a>
</div>