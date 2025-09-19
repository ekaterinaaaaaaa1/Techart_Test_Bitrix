<div class="{{ $block }} product-item">
	<a class="{{ $block->elem('link') }}" href="{!! $item['DETAIL_PAGE_URL'] !!}" data-entity="image-wrapper">
		<span class="{{ $block->elem('img') }} product-item-image-original" id="{{ $itemIds['PICT'] }}" style="background-image: url({{ $item['DETAIL_PICTURE']['SRC'] }})"></span>
        <span class="{{ $block->elem('img') }} product-item-image-alternative" id="{{ $itemIds['SECOND_PICT'] }}" style="background-image: url({{ $item['DETAIL_PICTURE']['SRC'] }})"></span>
    </a>
	<div class="{{ $block->elem('name') }} product-item-title">
	<a href="{!! $item['DETAIL_PAGE_URL'] !!}">{!! $item['NAME'] !!}</a></div>
	<div class="product-item-info-container product-item-price-container" data-entity="price-block">
		<span class="product-item-price-current" id="{{ $itemIds['PRICE'] }}">
			{!! $price['PRINT_RATIO_PRICE'] !!}
		</span>
	</div>
</div>
<div class="product-item-info-container product-item-hidden" data-entity="buttons-block">
	<div class="product-item-button-container" id="{{ $itemIds['BASKET_ACTIONS'] }}">
		<a class="btn btn-default {{ $buttonSizeClass }}" id="{{ $itemIds['BUY_LINK'] }}" href="javascript:void(0)" rel="nofollow">
			{!! ($arParams['ADD_TO_BASKET_ACTION'] === 'BUY' ? $arParams['MESS_BTN_BUY'] : $arParams['MESS_BTN_ADD_TO_BASKET']) !!}
		</a>
	</div>
</div>