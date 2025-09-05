<?
use Bitrix\Main\Page\Asset;

require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("");

Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/Resources/css/main_style.css");
?>
<main>
    <p>Страница в разработке</p>
</main>
<?
	require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>