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
<?php if ($arResult['ID']): ?>
<div class="container">
    <div class="menu">
        <a href="/news/index.php">
            <span class="menu-news-title">Главная</span=>
        </a>
        <span class="menu-news-title"> / </span>
        <span><?= isset($arResult['NAME']) ? $arResult['NAME'] : ''; ?></span>
    </div>
    <h1><?= isset($arResult['NAME']) ? $arResult['NAME'] : ''; ?></h1>
    <div class="news">
        <div class="news-content news-message">
            <span class="news-date"><?= isset($arResult['TAGS']) ? date('d.m.Y', strtotime($arResult['TAGS'])) : ''; ?></span>
            <h2 class="news-announce"><?= isset($arResult['PREVIEW_TEXT']) ? $arResult['PREVIEW_TEXT'] : ''; ?></h2>
            <?= isset($arResult['DETAIL_TEXT']) ? $arResult['DETAIL_TEXT'] : ''; ?>
            <? if (!empty($arResult['DISPLAY_PROPERTIES']['THEMES'])) { ?>
            <div>
                <? $themes = array_map(fn($element) => "<a href=\"/news/index.php?THEME_ID=". $element['ID'] ."\">" . $element['NAME'] . "</a>", $arResult['DISPLAY_PROPERTIES']['THEMES']['LINK_ELEMENT_VALUE']); ?>
                <span>Темы: <?= implode(", ", $themes) . "."; ?></span>
            </div>
            <? }; ?>
            <a class="button news-button" href="/news/index.php">
                <img class="button-arrow" src="<?= SITE_TEMPLATE_PATH . "/Resources/img/icons/reverse_arrow.svg"; ?>" data-active="<?= SITE_TEMPLATE_PATH . "/Resources/img/icons/active_reverse_arrow.svg"; ?>" alt="Стрелка"></img>
                <span class="button-text">Назад к новостям</span>
            </a>
        </div>
        <div class="news-content">
            <div class="news-img-block">
                <img class="news-img" src="<?= isset($arResult["DETAIL_PICTURE"]["SRC"]) ? $arResult["DETAIL_PICTURE"]["SRC"] : ''; ?>" alt="Новость">
            </div>
        </div>
    </div>
</div>
<?php endif; ?>