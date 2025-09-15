<div class="{{ $block }}">
	<a class="{{ $block->elem('link') }}" href="{!! $item['DETAIL_PAGE_URL'] !!}" data-entity="image-wrapper">
		<img class="{{ $block->elem('img') }}" src="{{ $item['DETAIL_PICTURE']['SRC'] }}" alt=""></img>
        <p class="{{ $block->elem('name') }}">{!! $item['NAME'] !!}</p>
		@if (!empty($arResult['COUNTRIES_STRING']))
			<span class="{{ $block->elem('countries') }}">{!! $arResult['COUNTRIES_STRING'] !!}</span>
		@endif
	</a>
</div>