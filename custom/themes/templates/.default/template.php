<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
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
<div class="container">
	<nav>
		<ul>
			<? foreach ($arResult['ITEMS'] as $arItem) { ?>
				<li class="themes"><a href="<?= $arItem['DETAIL_TEXT'] ?>"><?= $arItem['NAME'] ?></a></li>
			<? }; ?>
		<ul>
	</nav>
</div>