<div class="{{ $block }} product-item">
	<a class="{{ $block->elem('link') }}" href="{!! $item['DETAIL_PAGE_URL'] !!}" data-entity="image-wrapper">
		<span class="{{ $block->elem('img') }} product-item-image-original" id="{{ $itemIds['PICT'] }}" style="background-image: url({{ $item['DETAIL_PICTURE']['SRC'] }})"></span>
        <span class="{{ $block->elem('img') }} product-item-image-alternative" id="{{ $itemIds['SECOND_PICT'] }}" style="background-image: url({{ $item['DETAIL_PICTURE']['SRC'] }})"></span>
    </a>
	<div class="{{ $block->elem('name') }} product-item-title">
	<a href="{!! $item['DETAIL_PAGE_URL'] !!}">{!! $item['NAME'] !!}</a></div>
	@if (!empty($arResult['COUNTRIES_STRING']))
		<span class="{{ $block->elem('countries') }}">{!! $arResult['COUNTRIES_STRING'] !!}</span>
	@endif
</div>