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
        <a href="/news/">
            <span class="menu-news-title">Главная</span=>
        </a>
        <span class="menu-news-title"> / </span>
        <span><?= isset($arResult['NAME']) ? $arResult['NAME'] : ''; ?></span>
    </div>
    <? $title = isset($arResult['NAME']) ? $arResult['NAME'] : ''; ?>
    <?=
        \TAO::frontend()->renderBlock(
            'common/title',
            ["title" => $title]
        )
    ?>
    <?=
        \TAO::frontend()->renderBlock(
            'common/news-detail',
            ["arResult" => $arResult]
        )
    ?>
</div>
<?php endif; ?>