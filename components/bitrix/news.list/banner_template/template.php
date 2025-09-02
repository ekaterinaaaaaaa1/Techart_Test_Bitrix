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
$this->setFrameMode(true);
?>

<div class="news-banner">
    <img class="news-banner-img" src="<?= $arResult["ITEMS"][0]["DETAIL_PICTURE"]["SRC"]; ?>" alt="Новость"></img>
    <div class="news-banner-text">
        <h1 class="news-banner-title"><?= $arResult["ITEMS"][0]["NAME"]; ?></h1>
        <?= $arResult["ITEMS"][0]["PREVIEW_TEXT"]; ?>
    </div>
</div>