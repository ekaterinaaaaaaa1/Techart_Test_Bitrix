<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

$arComponentParameters = [
    'GROUPS' => [
        'IBLOCK_PARAMS' => [
            'NAME' => 'Параметры инфоблока'
        ]
    ],
    'PARAMETERS' => [
        'IBLOCK_ID' => [
            'NAME' => 'ID инфоблока',
            'TYPE' => 'NUMBER',
            'PARENT' => 'IBLOCK_PARAMS',
        ],
    ],
];