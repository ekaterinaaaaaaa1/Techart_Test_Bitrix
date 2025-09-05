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
<?php if(!empty($arResult)) { ?>
<nav>
    <ul class="topmenu">
        <?php foreach ($arResult as $item) { ?>
            <li><a href="<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a>
            <?php if(!empty($item['SUBITEMS'])) { ?>
                <ul class="submenu">
                    <?php foreach ($item['SUBITEMS'] as $subItem) { ?>
                        <li><a href="<?= $subItem['LINK']; ?>"><?= $subItem['TEXT']; ?></a></li>
                    <?php }; ?>
                </ul>
            <?php }; ?>
            </li>
        <?php }; ?>
    </ul>
</nav>
<?php }; ?>
