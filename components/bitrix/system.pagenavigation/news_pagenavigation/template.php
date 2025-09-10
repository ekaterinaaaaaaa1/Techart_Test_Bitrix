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
    PRINT_R($arResult);
?>
<div class="page-switch-buttons">
    <div class="page-switch-buttons-numbers">
        <?php
        if ($arResult["NavPageNomer"] + $pageSwitchButtonCount <= $arResult["NavPageCount"] + 1) {
            for ($i = 0; $i < $pageSwitchButtonCount; $i++) { ?>
                <a href="<?="/news". $themeParam . "/page-" . $arResult["NavPageNomer"] + $i . "/" ?>">
                    <button class="button page-switch-button button-text">
                        <?= $arResult["NavPageNomer"] + $i; ?>
                    </button>
                </a>
            <?php };
        }
        else {
            for ($i = $pageSwitchButtonCount - 1; $i >= 0; $i--) { ?>
                <a href="<?="/news". $themeParam . "/page-" . $arResult["NavPageCount"] - $i . "/" ?>">
                    <button class="button page-switch-button button-text">
                        <?= $arResult["NavPageCount"] - $i; ?>
                    </button>
                </a>
            <?php };
        }
        ?>
    </div>
    <a href="<?="/news". $themeParam . "/page-" . $arResult["NavPageNomer"] + 1 . "/" ?>">
        <button class="button page-switch-button page-switch-button-arrow" <?php if ($arResult["NavPageNomer"] == $arResult["NavPageCount"]){?>style="display: none;"<?php } ?>>
            <img class="page-switch-button-arrow-img" src="<?= SITE_TEMPLATE_PATH . "/Resources/img/icons/next_page_arrow.svg"; ?>" data-active="<?= SITE_TEMPLATE_PATH . "/Resources/img/icons/active_next_page_arrow.svg"; ?>" alt="Стрелка"></img>
        </button>
    </a>
</div>