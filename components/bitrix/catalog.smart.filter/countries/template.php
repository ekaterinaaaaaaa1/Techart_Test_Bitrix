<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true);

$templateData = array(
	'TEMPLATE_THEME' => $this->GetFolder().'/themes/'.$arParams['TEMPLATE_THEME'].'/colors.css',
	'TEMPLATE_CLASS' => 'bx-'.$arParams['TEMPLATE_THEME']
);

if (isset($templateData['TEMPLATE_THEME']))
{
	$this->addExternalCss($templateData['TEMPLATE_THEME']);
}
$this->addExternalCss("/bitrix/css/main/bootstrap.css");
$this->addExternalCss("/bitrix/css/main/font-awesome.css");
?>

<?
$pricesArray = [];

foreach($arResult["ITEMS"] as $key=>$arItem)//prices
{
	$key = $arItem["ENCODED_ID"];
	if(isset($arItem["PRICE"])):
		if ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
			continue;

		$precision = 0;
		$step_num = 4;
		$step = ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"]) / $step_num;
		$prices = array();
		if (Bitrix\Main\Loader::includeModule("currency"))
		{
			for ($i = 0; $i < $step_num; $i++)
			{
				$prices[$i] = CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MIN"]["VALUE"] + $step*$i, $arItem["VALUES"]["MIN"]["CURRENCY"], false);
			}
			$prices[$step_num] = CCurrencyLang::CurrencyFormat($arItem["VALUES"]["MAX"]["VALUE"], $arItem["VALUES"]["MAX"]["CURRENCY"], false);
			$pricesArray[$key] = $prices;
		}
		else
		{
			$precision = $arItem["DECIMALS"]? $arItem["DECIMALS"]: 0;
			for ($i = 0; $i < $step_num; $i++)
			{
				$prices[$i] = number_format($arItem["VALUES"]["MIN"]["VALUE"] + $step*$i, $precision, ".", "");
			}
			$prices[$step_num] = number_format($arItem["VALUES"]["MAX"]["VALUE"], $precision, ".", "");
			$pricesArray[$key] = $prices;
		}
		?>
		<?
		$arJsParams = array(
			"leftSlider" => 'left_slider_'.$key,
			"rightSlider" => 'right_slider_'.$key,
			"tracker" => "drag_tracker_".$key,
			"trackerWrap" => "drag_track_".$key,
			"minInputId" => $arItem["VALUES"]["MIN"]["CONTROL_ID"],
			"maxInputId" => $arItem["VALUES"]["MAX"]["CONTROL_ID"],
			"minPrice" => $arItem["VALUES"]["MIN"]["VALUE"],
			"maxPrice" => $arItem["VALUES"]["MAX"]["VALUE"],
			"curMinPrice" => $arItem["VALUES"]["MIN"]["HTML_VALUE"],
			"curMaxPrice" => $arItem["VALUES"]["MAX"]["HTML_VALUE"],
			"fltMinPrice" => intval($arItem["VALUES"]["MIN"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MIN"]["FILTERED_VALUE"] : $arItem["VALUES"]["MIN"]["VALUE"] ,
			"fltMaxPrice" => intval($arItem["VALUES"]["MAX"]["FILTERED_VALUE"]) ? $arItem["VALUES"]["MAX"]["FILTERED_VALUE"] : $arItem["VALUES"]["MAX"]["VALUE"],
			"precision" => $precision,
			"colorUnavailableActive" => 'colorUnavailableActive_'.$key,
			"colorAvailableActive" => 'colorAvailableActive_'.$key,
			"colorAvailableInactive" => 'colorAvailableInactive_'.$key,
		);
		?>
		<script>
			BX.ready(function(){
				window['trackBar<?=$key?>'] = new BX.Iblock.SmartFilter(<?=CUtil::PhpToJSObject($arJsParams)?>);
			});
		</script>
	<?endif;
}
?>

<?=\TAO::frontend()->renderBlock(
    'common/smart-filter',
    ["arResult" => $arResult,
	"step_num" => $step_num,
	"pricesArray" => $pricesArray,
	"arParams" => $arParams,
	"templateData" => $templateData]
);
?>

<script>
	var smartFilter = new JCSmartFilter('<?echo CUtil::JSEscape($arResult["FORM_ACTION"])?>', '<?=CUtil::JSEscape($arParams["FILTER_VIEW_MODE"])?>', <?=CUtil::PhpToJSObject($arResult["JS_FILTER_PARAMS"])?>);
</script>