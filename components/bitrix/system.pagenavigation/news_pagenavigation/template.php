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
$maxPageSwitchButtonCount = 3;
$pageSwitchButtonCount = $arResult["NavPageCount"] < $maxPageSwitchButtonCount ? $arResult["NavPageCount"] : $maxPageSwitchButtonCount;
$this->setFrameMode(true);
?>
<?
    $themeId = $_GET['THEME_ID'];
    $themeParam = "";
    if (!empty($themeId)) {
        $themeParam = "/theme-" . $themeId;
    }
?>

<?=
    \TAO::frontend()->renderBlock(
        'common/pagenavigation',
        [
            "pageSwitchButtonCount" => $pageSwitchButtonCount,
            "themeParam" => $themeParam,
            "arResult" => $arResult
        ]
    )
?>