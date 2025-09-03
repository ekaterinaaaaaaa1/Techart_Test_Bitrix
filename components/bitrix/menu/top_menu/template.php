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

<?php if(!empty($arResult)): ?>
<nav>
    <ul class="topmenu">
        <?php foreach ($arResult as $item): ?>
            <li><a href="<?= $item['LINK']; ?>"><?= $item['TEXT']; ?></a></li>
        <!-- <li><a href="#">Текарт</a>
            <ul class="submenu">
                <li><a href="/techart/about.php">О компании</a></li>
                <li><a href="/tachart/contacts.php">Контакты</a></li>
            </ul>
        </li> -->
        <?php endforeach; ?>
    </ul>
</nav>
<?php endif; ?>