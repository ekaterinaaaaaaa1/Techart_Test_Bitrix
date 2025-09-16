<div class="{{ $block }} bx-catalog-element" id="{{ $itemIds['ID'] }}">
    <div class="{{ $block->elem('content') }} product-item-detail-slider-container" id="{{ $itemIds['BIG_SLIDER_ID'] }}">
        <span class="product-item-detail-slider-close" data-entity="close-popup"></span>
        <div class="product-item-detail-slider-block" data-entity="images-slider-block">
            <div class="product-item-detail-slider-images-container" data-entity="images-container">
                <div class="{{ $block->elem('slider') }} product-item-detail-slider-image active" data-entity="image" data-id="{{ $itemIds['ID'] }}">
                    <img class="{{ $block->elem('img') }}" id="{{ $itemIds['PICT'] }}" src="{{ $arResult['MORE_PHOTO'][0]['SRC'] }}" itemprop="image"></img>
                </div>
            </div>
        </div>
    </div>
    <div class="{{ $block->elem('content') }}">
        @if (!empty($arResult['COUNTRIES_STRING']))
            <span class="{{ $block->elem('property') }}">{!! $arResult['COUNTRIES_STRING'] !!}</span>
        @endif
        @if (!empty($arResult['SUBJECT_STRING']))
            <span class="{{ $block->elem('property') }}">{!! $arResult['SUBJECT_STRING'] !!}</span>
        @endif
        <div class="product-item-detail-pay-block">
            <div class="product-item-detail-info-container">
                <div class="product-item-detail-price-current" id="{{ $itemIds['PRICE_ID'] }}">
					{!! $price['PRINT_RATIO_PRICE'] !!}
				</div>
            </div>
            
        </div>
    </div>
</div>