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
        <nav>
            <ul class="topmenu">
                <li><a href="#">Текарт</a>
                    <ul class="submenu">
                        <li><a href="/techart/about.php">О компании</a></li>
                        <li><a href="/tachart/contacts.php">Контакты</a></li>
                    </ul>
                </li>
                <li><a href="/index.php">Главная</a></li>
                <li><a href="/news/list.php">Новости</a></li>
            </ul>
        </nav>
    </header>