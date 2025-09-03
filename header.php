<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
?>
						
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
</head>
<body>
	<div id="panel">
		<?$APPLICATION->ShowPanel();?>
	</div>
    <header>
        <a class="header-logo-link" href="/news/list.php" target="_self">
            <img class="header-logo" src="<?=SITE_TEMPLATE_PATH?>/Resources/img/logo.svg" alt="Логотип"></img>
            <span class="header-logo-title">Галактический вестник</span>
        </a>
    </header>