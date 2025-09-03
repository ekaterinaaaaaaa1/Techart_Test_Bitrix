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
        <a href="/list.php">
            <span class="menu-news-title">Главная</span=>
        </a>
        <span class="menu-news-title"> / </span>
        <span><?= $arResult['NAME']; ?></span>
    </div>
    <h1><?= $arResult['NAME']; ?></h1>
    <div class="news">
        <div class="news-content news-message">
            <span class="news-date"><?= date('d.m.Y', strtotime($arResult['TAGS'])); ?></span>
            <h2 class="news-announce"><?= $arResult['PREVIEW_TEXT']; ?></h2>
            <?= $arResult['DETAIL_TEXT']; ?>
            <a class="button news-button" href="/list.php">
                <img class="button-arrow" src="/local/templates/main/Resources/img/icons/reverse_arrow.svg" data-active="/local/templates/main/Resources/img/icons/active_reverse_arrow.svg" alt="Стрелка"></img>
                <span class="button-text">Назад к новостям</span>
            </a>
        </div>
        <div class="news-content">
            <div class="news-img-block">
                <img class="news-img" src="<?= $arResult["DETAIL_PICTURE"]["SRC"]; ?>" alt="Новость">
            </div>
        </div>
    </div>
</div>
<?php endif; ?>