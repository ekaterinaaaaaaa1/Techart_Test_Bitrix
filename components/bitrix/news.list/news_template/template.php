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
<?php if(!empty($arResult["ITEMS"])): ?>
	<h1><?= $arResult["NAME"]?></h1>
	<div class="news-container">
		<?php foreach ($arResult["ITEMS"] as $arItem) { ?>
		<div class="news">
			<span class="news-date"><?= isset($arItem["FIELDS"]["TAGS"]) ? date('d.m.Y', strtotime($arItem["FIELDS"]["TAGS"])) : ''; ?></span>
			<h2 class="news-title"><?= isset($arItem["NAME"]) ? $arItem["NAME"] : ''; ?></h2>
			<p class="news-announce"><?= isset($arItem["PREVIEW_TEXT"]) ? $arItem["PREVIEW_TEXT"] : ''; ?></p>
			<a class="button news-button" href="<?= $arItem["DETAIL_PAGE_URL"]; ?>">
				<span class="button-text">Подробнее </span>
				<img class="button-arrow" src="/local/templates/main/Resources/img/icons/arrow.svg" data-active="/local/templates/main/Resources/img/icons/active_arrow.svg" alt="Стрелка"></img>
			</a>
		</div>
		<?php } ?>
	</div>
<?php endif; ?>

<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
	<?= $arResult["NAV_STRING"] ?>
<? endif; ?>