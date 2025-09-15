<div class="{{ $block }} product-item">
	<a class="{{ $block->elem('link') }}" href="{!! $item['DETAIL_PAGE_URL'] !!}" data-entity="image-wrapper">
		<img class="{{ $block->elem('img') }} product-item-image-original" id="{{ $itemIds['PICT'] }}" src="{{ $item['DETAIL_PICTURE']['SRC'] }}" alt=""></img>
        <img class="{{ $block->elem('img') }} product-item-image-alternative" id="{{ $itemIds['SECOND_PICT'] }}" src="{{ $item['DETAIL_PICTURE']['SRC'] }}" alt=""></img>
        <p class="{{ $block->elem('name') }}">{!! $item['NAME'] !!}</p>
		@if (!empty($arResult['COUNTRIES_STRING']))
			<span class="{{ $block->elem('countries') }}">{!! $arResult['COUNTRIES_STRING'] !!}</span>
		@endif
	</a>
</div>