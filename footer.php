<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

\TAO::frontendCss('index');
\TAO::frontendJs('index');
?>
<?=
    \TAO::frontend()->renderBlock(
        'common/footer',
        []
    )
?>
</body>
</html>