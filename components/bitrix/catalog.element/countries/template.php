<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
use Bitrix\Catalog\ProductTable;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
//$this->addExternalCss('/bitrix/css/main/bootstrap.css');

$templateLibrary = array('popup', 'fx', 'ui.fonts.opensans');
$currencyList = '';

if (!empty($arResult['CURRENCIES']))
{
	$templateLibrary[] = 'currency';
	$currencyList = CUtil::PhpToJSObject($arResult['CURRENCIES'], false, true, true);
}

$templateData = [
	'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
	'TEMPLATE_LIBRARY' => $templateLibrary,
	'CURRENCIES' => $currencyList,
	'ITEM' => [
		'ID' => $arResult['ID'],
		'IBLOCK_ID' => $arResult['IBLOCK_ID'],
	],
];
unset($currencyList, $templateLibrary);

$mainId = $this->GetEditAreaId($arResult['ID']);
$itemIds = array(
	'ID' => $mainId,
	'DISCOUNT_PERCENT_ID' => $mainId.'_dsc_pict',
	'STICKER_ID' => $mainId.'_sticker',
	'BIG_SLIDER_ID' => $mainId.'_big_slider',
	'BIG_IMG_CONT_ID' => $mainId.'_bigimg_cont',
	'SLIDER_CONT_ID' => $mainId.'_slider_cont',
	'OLD_PRICE_ID' => $mainId.'_old_price',
	'PRICE_ID' => $mainId.'_price',
	'DESCRIPTION_ID' => $mainId.'_description',
	'DISCOUNT_PRICE_ID' => $mainId.'_price_discount',
	'PRICE_TOTAL' => $mainId.'_price_total',
	'SLIDER_CONT_OF_ID' => $mainId.'_slider_cont_',
	'QUANTITY_ID' => $mainId.'_quantity',
	'QUANTITY_DOWN_ID' => $mainId.'_quant_down',
	'QUANTITY_UP_ID' => $mainId.'_quant_up',
	'QUANTITY_MEASURE' => $mainId.'_quant_measure',
	'QUANTITY_LIMIT' => $mainId.'_quant_limit',
	'BUY_LINK' => $mainId.'_buy_link',
	'ADD_BASKET_LINK' => $mainId.'_add_basket_link',
	'BASKET_ACTIONS_ID' => $mainId.'_basket_actions',
	'NOT_AVAILABLE_MESS' => $mainId.'_not_avail',
	'COMPARE_LINK' => $mainId.'_compare_link',
	'TREE_ID' => $mainId.'_skudiv',
	'DISPLAY_PROP_DIV' => $mainId.'_sku_prop',
	'DISPLAY_MAIN_PROP_DIV' => $mainId.'_main_sku_prop',
	'OFFER_GROUP' => $mainId.'_set_group_',
	'BASKET_PROP_DIV' => $mainId.'_basket_prop',
	'SUBSCRIBE_LINK' => $mainId.'_subscribe',
	'TABS_ID' => $mainId.'_tabs',
	'TAB_CONTAINERS_ID' => $mainId.'_tab_containers',
	'SMALL_CARD_PANEL_ID' => $mainId.'_small_card_panel',
	'TABS_PANEL_ID' => $mainId.'_tabs_panel'
);
$obName = $templateData['JS_OBJ'] = 'ob'.preg_replace('/[^a-zA-Z0-9_]/', 'x', $mainId);
$name = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']
	: $arResult['NAME'];
$title = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_TITLE']
	: $arResult['NAME'];
$alt = !empty($arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT'])
	? $arResult['IPROPERTY_VALUES']['ELEMENT_DETAIL_PICTURE_FILE_ALT']
	: $arResult['NAME'];

$skuProps = array();
$price = $actualItem['ITEM_PRICES'][$actualItem['ITEM_PRICE_SELECTED']];
$measureRatio = $actualItem['ITEM_MEASURE_RATIOS'][$actualItem['ITEM_MEASURE_RATIO_SELECTED']]['RATIO'];
$showDiscount = $price['PERCENT'] > 0;

if ($arParams['SHOW_SKU_DESCRIPTION'] === 'Y')
{
	$skuDescription = false;
	foreach ($arResult['OFFERS'] as $offer)
	{
		if ($offer['DETAIL_TEXT'] != '' || $offer['PREVIEW_TEXT'] != '')
		{
			$skuDescription = true;
			break;
		}
	}
	$showDescription = $skuDescription || !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
}
else
{
	$showDescription = !empty($arResult['PREVIEW_TEXT']) || !empty($arResult['DETAIL_TEXT']);
}

$showBuyBtn = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION']);
$buyButtonClassName = in_array('BUY', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showAddBtn = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION']);
$showButtonClassName = in_array('ADD', $arParams['ADD_TO_BASKET_ACTION_PRIMARY']) ? 'btn-default' : 'btn-link';
$showSubscribe = $arParams['PRODUCT_SUBSCRIPTION'] === 'Y' && ($arResult['PRODUCT']['SUBSCRIBE'] === 'Y' || $haveOffers);

$arParams['MESS_BTN_BUY'] = $arParams['MESS_BTN_BUY'] ?: Loc::getMessage('CT_BCE_CATALOG_BUY');
$arParams['MESS_BTN_ADD_TO_BASKET'] = $arParams['MESS_BTN_ADD_TO_BASKET'] ?: Loc::getMessage('CT_BCE_CATALOG_ADD');

if ($arResult['MODULES']['catalog'] && $arResult['PRODUCT']['TYPE'] === ProductTable::TYPE_SERVICE)
{
	$arParams['~MESS_NOT_AVAILABLE_SERVICE'] ??= '';
	$arParams['~MESS_NOT_AVAILABLE'] = $arParams['~MESS_NOT_AVAILABLE_SERVICE']
		?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE_SERVICE')
	;

	$arParams['MESS_NOT_AVAILABLE_SERVICE'] ??= '';
	$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE_SERVICE']
		?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE_SERVICE')
	;
}
else
{
	$arParams['~MESS_NOT_AVAILABLE'] ??= '';
	$arParams['~MESS_NOT_AVAILABLE'] = $arParams['~MESS_NOT_AVAILABLE']
		?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE')
	;

	$arParams['MESS_NOT_AVAILABLE'] ??= '';
	$arParams['MESS_NOT_AVAILABLE'] = $arParams['MESS_NOT_AVAILABLE']
		?: Loc::getMessage('CT_BCE_CATALOG_NOT_AVAILABLE')
	;
}

$arParams['MESS_BTN_COMPARE'] = $arParams['MESS_BTN_COMPARE'] ?: Loc::getMessage('CT_BCE_CATALOG_COMPARE');
$arParams['MESS_PRICE_RANGES_TITLE'] = $arParams['MESS_PRICE_RANGES_TITLE'] ?: Loc::getMessage('CT_BCE_CATALOG_PRICE_RANGES_TITLE');
$arParams['MESS_DESCRIPTION_TAB'] = $arParams['MESS_DESCRIPTION_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_DESCRIPTION_TAB');
$arParams['MESS_PROPERTIES_TAB'] = $arParams['MESS_PROPERTIES_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_PROPERTIES_TAB');
$arParams['MESS_COMMENTS_TAB'] = $arParams['MESS_COMMENTS_TAB'] ?: Loc::getMessage('CT_BCE_CATALOG_COMMENTS_TAB');
$arParams['MESS_SHOW_MAX_QUANTITY'] = $arParams['MESS_SHOW_MAX_QUANTITY'] ?: Loc::getMessage('CT_BCE_CATALOG_SHOW_MAX_QUANTITY');
$arParams['MESS_RELATIVE_QUANTITY_MANY'] = $arParams['MESS_RELATIVE_QUANTITY_MANY'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_MANY');
$arParams['MESS_RELATIVE_QUANTITY_FEW'] = $arParams['MESS_RELATIVE_QUANTITY_FEW'] ?: Loc::getMessage('CT_BCE_CATALOG_RELATIVE_QUANTITY_FEW');

// $positionClassMap = array(
// 	'left' => 'product-item-label-left',
// 	'center' => 'product-item-label-center',
// 	'right' => 'product-item-label-right',
// 	'bottom' => 'product-item-label-bottom',
// 	'middle' => 'product-item-label-middle',
// 	'top' => 'product-item-label-top'
// );

// $discountPositionClass = 'product-item-label-big';
// if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION']))
// {
// 	foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos)
// 	{
// 		$discountPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
// 	}
// }

// $labelPositionClass = 'product-item-label-big';
// if (!empty($arParams['LABEL_PROP_POSITION']))
// {
// 	foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos)
// 	{
// 		$labelPositionClass .= isset($positionClassMap[$pos]) ? ' '.$positionClassMap[$pos] : '';
// 	}
// }

$jsParams = array(
	'CONFIG' => array(
		'USE_CATALOG' => $arResult['CATALOG'],
		'SHOW_QUANTITY' => $arParams['USE_PRODUCT_QUANTITY'],
		'SHOW_PRICE' => true,
		'SHOW_DISCOUNT_PERCENT' => $arParams['SHOW_DISCOUNT_PERCENT'] === 'Y',
		'SHOW_OLD_PRICE' => $arParams['SHOW_OLD_PRICE'] === 'Y',
		'USE_PRICE_COUNT' => $arParams['USE_PRICE_COUNT'],
		'DISPLAY_COMPARE' => $arParams['DISPLAY_COMPARE'],
		'SHOW_SKU_PROPS' => $arResult['SHOW_OFFERS_PROPS'],
		'OFFER_GROUP' => $arResult['OFFER_GROUP'],
		'MAIN_PICTURE_MODE' => $arParams['DETAIL_PICTURE_MODE'],
		'ADD_TO_BASKET_ACTION' => $arParams['ADD_TO_BASKET_ACTION'],
		'SHOW_CLOSE_POPUP' => $arParams['SHOW_CLOSE_POPUP'] === 'Y',
		'SHOW_MAX_QUANTITY' => $arParams['SHOW_MAX_QUANTITY'],
		'RELATIVE_QUANTITY_FACTOR' => $arParams['RELATIVE_QUANTITY_FACTOR'],
		'TEMPLATE_THEME' => $arParams['TEMPLATE_THEME'],
		'USE_STICKERS' => true,
		'USE_SUBSCRIBE' => $showSubscribe,
		'SHOW_SLIDER' => $arParams['SHOW_SLIDER'],
		'SLIDER_INTERVAL' => $arParams['SLIDER_INTERVAL'],
		'ALT' => $alt,
		'TITLE' => $title,
		'MAGNIFIER_ZOOM_PERCENT' => 200,
		'USE_ENHANCED_ECOMMERCE' => $arParams['USE_ENHANCED_ECOMMERCE'],
		'DATA_LAYER_NAME' => $arParams['DATA_LAYER_NAME'],
		'BRAND_PROPERTY' => !empty($arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']])
			? $arResult['DISPLAY_PROPERTIES'][$arParams['BRAND_PROPERTY']]['DISPLAY_VALUE']
			: null,
		'SHOW_SKU_DESCRIPTION' => $arParams['SHOW_SKU_DESCRIPTION'],
		'DISPLAY_PREVIEW_TEXT_MODE' => $arParams['DISPLAY_PREVIEW_TEXT_MODE']
	),
	'PRODUCT_TYPE' => $arResult['PRODUCT']['TYPE'],
	'VISUAL' => $itemIds,
	'DEFAULT_PICTURE' => array(
		'PREVIEW_PICTURE' => $arResult['DEFAULT_PICTURE'],
		'DETAIL_PICTURE' => $arResult['DEFAULT_PICTURE']
	),
	'PRODUCT' => array(
		'ID' => $arResult['ID'],
		'ACTIVE' => $arResult['ACTIVE'],
		'NAME' => $arResult['~NAME'],
		'CATEGORY' => $arResult['CATEGORY_PATH'],
		'DETAIL_TEXT' => $arResult['DETAIL_TEXT'],
		'DETAIL_TEXT_TYPE' => $arResult['DETAIL_TEXT_TYPE'],
		'PREVIEW_TEXT' => $arResult['PREVIEW_TEXT'],
		'PREVIEW_TEXT_TYPE' => $arResult['PREVIEW_TEXT_TYPE']
	),
	'BASKET' => array(
		'QUANTITY' => $arParams['PRODUCT_QUANTITY_VARIABLE'],
		'BASKET_URL' => $arParams['BASKET_URL'],
		'SKU_PROPS' => $arResult['OFFERS_PROP_CODES'],
		'ADD_URL_TEMPLATE' => $arResult['~ADD_URL_TEMPLATE'],
		'BUY_URL_TEMPLATE' => $arResult['~BUY_URL_TEMPLATE']
	),
	'OFFERS' => $arResult['JS_OFFERS'],
	'OFFER_SELECTED' => $arResult['OFFERS_SELECTED'],
	'TREE_PROPS' => $skuProps
);

echo \TAO::frontend()->renderBlock(
    'common/title',
    ["title" => $name]
);

echo \TAO::frontend()->renderBlock(
    'common/catalog-element',
    ["arResult" => $arResult,
	"itemIds" => $itemIds,
	"price" => $price]
);

print_r($actualItem);
?>

<div class="product-item-detail-pay-block">
<?php
foreach ($arParams['PRODUCT_PAY_BLOCK_ORDER'] as $blockName)
{
	switch ($blockName)
	{

		case 'price':
			?>
			<div class="product-item-detail-info-container">
				<?php
				if ($arParams['SHOW_OLD_PRICE'] === 'Y')
				{
					?>
					<div class="product-item-detail-price-old" id="<?=$itemIds['OLD_PRICE_ID']?>"
						style="display: <?=($showDiscount ? '' : 'none')?>;">
						<?=($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : '')?>
					</div>
					<?php
				}
				?>
				<div class="product-item-detail-price-current" id="<?=$itemIds['PRICE_ID']?>">
					<?=$price['PRINT_RATIO_PRICE']?>
				</div>
				<?php
				if ($arParams['SHOW_OLD_PRICE'] === 'Y')
				{
					?>
					<div class="item_economy_price" id="<?=$itemIds['DISCOUNT_PRICE_ID']?>"
						style="display: <?=($showDiscount ? '' : 'none')?>;">
						<?php
						if ($showDiscount)
						{
							echo Loc::getMessage('CT_BCE_CATALOG_ECONOMY_INFO2', array('#ECONOMY#' => $price['PRINT_RATIO_DISCOUNT']));
						}
						?>
					</div>
					<?php
				}
				?>
			</div>
			<?php
			break;

		case 'buttons':
			?>
			<div data-entity="main-button-container">
				<div id="<?=$itemIds['BASKET_ACTIONS_ID']?>" style="display: <?=($actualItem['CAN_BUY'] ? '' : 'none')?>;">
					<?php
					if ($showAddBtn)
					{
						?>
						<div class="product-item-detail-info-container">
							<a class="btn <?=$showButtonClassName?> product-item-detail-buy-button" id="<?=$itemIds['ADD_BASKET_LINK']?>"
								href="javascript:void(0);">
								<span><?=$arParams['MESS_BTN_ADD_TO_BASKET']?></span>
							</a>
						</div>
						<?php
					}

					if ($showBuyBtn)
					{
						?>
						<div class="product-item-detail-info-container">
							<a class="btn <?=$buyButtonClassName?> product-item-detail-buy-button" id="<?=$itemIds['BUY_LINK']?>"
								href="javascript:void(0);">
								<span><?=$arParams['MESS_BTN_BUY']?></span>
							</a>
						</div>
						<?php
					}
					?>
				</div>
				<?php
				if ($showSubscribe)
				{
					?>
					<div class="product-item-detail-info-container">
						<?php
						$APPLICATION->IncludeComponent(
							'bitrix:catalog.product.subscribe',
							'',
							array(
								'CUSTOM_SITE_ID' => $arParams['CUSTOM_SITE_ID'] ?? null,
								'PRODUCT_ID' => $arResult['ID'],
								'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],
								'BUTTON_CLASS' => 'btn btn-default product-item-detail-buy-button',
								'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],
								'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],
							),
							$component,
							array('HIDE_ICONS' => 'Y')
						);
						?>
					</div>
					<?php
				}
				?>
				<div class="product-item-detail-info-container">
					<a class="btn btn-link product-item-detail-buy-button" id="<?=$itemIds['NOT_AVAILABLE_MESS']?>"
						href="javascript:void(0)"
						rel="nofollow" style="display: <?=(!$actualItem['CAN_BUY'] ? '' : 'none')?>;">
						<?=$arParams['MESS_NOT_AVAILABLE']?>
					</a>
				</div>
			</div>
			<?php
			break;
	}
}
?>
</div>

	<meta itemprop="name" content="<?=$name?>" />
	<meta itemprop="category" content="<?=$arResult['CATEGORY_PATH']?>" />
<?php

$jsParams["IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED"] =
	$arResult["IS_FACEBOOK_CONVERSION_CUSTOMIZE_PRODUCT_EVENT_ENABLED"]
;

?>
<script>
	BX.message({
		ECONOMY_INFO_MESSAGE: '<?=GetMessageJS('CT_BCE_CATALOG_ECONOMY_INFO2')?>',
		TITLE_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_ERROR')?>',
		TITLE_BASKET_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_TITLE_BASKET_PROPS')?>',
		BASKET_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_BASKET_UNKNOWN_ERROR')?>',
		BTN_SEND_PROPS: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_SEND_PROPS')?>',
		BTN_MESSAGE_DETAIL_BASKET_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_BASKET_REDIRECT')?>',
		BTN_MESSAGE_CLOSE: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE')?>',
		BTN_MESSAGE_DETAIL_CLOSE_POPUP: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_CLOSE_POPUP')?>',
		TITLE_SUCCESSFUL: '<?=GetMessageJS('CT_BCE_CATALOG_ADD_TO_BASKET_OK')?>',
		COMPARE_MESSAGE_OK: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_OK')?>',
		COMPARE_UNKNOWN_ERROR: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_UNKNOWN_ERROR')?>',
		COMPARE_TITLE: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_COMPARE_TITLE')?>',
		BTN_MESSAGE_COMPARE_REDIRECT: '<?=GetMessageJS('CT_BCE_CATALOG_BTN_MESSAGE_COMPARE_REDIRECT')?>',
		PRODUCT_GIFT_LABEL: '<?=GetMessageJS('CT_BCE_CATALOG_PRODUCT_GIFT_LABEL')?>',
		PRICE_TOTAL_PREFIX: '<?=GetMessageJS('CT_BCE_CATALOG_MESS_PRICE_TOTAL_PREFIX')?>',
		RELATIVE_QUANTITY_MANY: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_MANY'])?>',
		RELATIVE_QUANTITY_FEW: '<?=CUtil::JSEscape($arParams['MESS_RELATIVE_QUANTITY_FEW'])?>',
		SITE_ID: '<?=CUtil::JSEscape($component->getSiteId())?>'
	});

	var <?=$obName?> = new JCCatalogElement(<?=CUtil::PhpToJSObject($jsParams, false, true)?>);
</script>
<?php
unset($actualItem, $itemIds, $jsParams);
