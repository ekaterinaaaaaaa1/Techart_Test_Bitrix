<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

\TAO::frontendCss('index');
\TAO::frontendJs('index');
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
    <?
        ob_start();
        $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "top_menu",
            Array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "subtop",
                "DELAY" => "N",
                "MAX_LEVEL" => "2",
                "MENU_CACHE_GET_VARS" => array(""),
                "MENU_CACHE_TIME" => "3600",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "Y"
            )
        );
        $nav = ob_get_clean();
    ?>
    <?=
        \TAO::frontend()->renderBlock(
            'common/header',
            ["nav" => $nav, "user" => $USER]
        )
    ?>