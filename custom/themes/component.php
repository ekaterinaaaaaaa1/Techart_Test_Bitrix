<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

    \Bitrix\Main\Loader::includeModule('iblock');

    $arFilter = [
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
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

    while ($arItem = $result->GetNext()) {
        $arResult['ITEMS'][] = [
            'NAME' => $arItem['NAME'],
            'DETAIL_TEXT' => $arItem['DETAIL_TEXT']
        ];
    }
    $this->includeComponentTemplate();