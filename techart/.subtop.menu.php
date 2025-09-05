<?php
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

\Bitrix\Main\Loader::includeModule('iblock');

$iblockId = 5;

$arFilter = [
    'IBLOCK_ID' => $iblockId,
];

$arSelect = [
    'ID',
    'NAME',
    'DETAIL_TEXT'
];

$result = CIBlockElement::GetList(
    [],
    $arFilter,
    false,
    false,
    $arSelect
);

while ($arItem = $result->GetNextElement()) {
    $arFields = $arItem->GetFields();
    $aMenuLinksExt[] = [
        $arFields['NAME'],
        $arFields['DETAIL_TEXT'],
        [],
        [],
        ""
    ];
};

$aMenuLinks = array_merge($aMenuLinksExt, $aMenuLinks);
