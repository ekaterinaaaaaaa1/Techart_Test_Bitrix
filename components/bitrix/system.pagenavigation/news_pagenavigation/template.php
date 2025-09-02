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
$pageSwitchButtonCount = 3;
$this->setFrameMode(true);
?>
<?ECHO $arResult["NavPageNomer"];?>
<div class="page-switch-buttons">
    <div class="page-switch-buttons-numbers">
        <?php
        if ($arResult["NavPageNomer"] + $pageSwitchButtonCount <= $arResult["NavPageCount"] + 1) {
            for ($i = 0; $i < $pageSwitchButtonCount; $i++): ?>
                <a href="/list.php?PAGEN_1=<?= $arResult["NavPageNomer"] + $i; ?>">
                    <button class="button page-switch-button button-text">
                        <?php echo $arResult["NavPageNomer"] + $i; ?>
                    </button>
                </a>
            <?php endfor;
        }
        else {
            for ($i = $pageSwitchButtonCount - 1; $i >= 0; $i--): ?>
                <a href="/list.php?PAGEN_1=<?= $arResult["NavPageCount"] - $i; ?>">
                    <button class="button page-switch-button button-text">
                        <?php echo $arResult["NavPageCount"] - $i; ?>
                    </button>
                </a>
            <?php endfor;
        }
        ?>
    </div>
    <a href="/list.php?PAGEN_1=<?= $arResult["NavPageNomer"] + 1; ?>">
        <button class="button page-switch-button page-switch-button-arrow" <?php if ($arResult["NavPageNomer"] == $arResult["NavPageCount"]){?>style="display: none;"<?php } ?>>
            <img class="page-switch-button-arrow-img" src="/local/templates/main/Resources/img/icons/next_page_arrow.svg" data-active="/local/templates/main/Resources/img/icons/active_next_page_arrow.svg" alt="Стрелка"></img>
        </button>
    </a>
</div>