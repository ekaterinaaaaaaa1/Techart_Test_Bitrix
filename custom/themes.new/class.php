<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();

class ThemesNewComponent extends CBitrixComponent
{
    protected function includeModules()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
    }

    public function onPrepareComponentParams($arParams)
    {
        $arParams['IBLOCK_ID'] ??= 0;
        return $arParams;
    }

    public function executeComponent()
    {
        $this->includeModules();
        $this->arResult = $this->getList();
        $this->includeComponentTemplate();
    }

    private function getList()
    {
        $iblockId = (int)$this->arParams['IBLOCK_ID'];

        if ($iblockId < 1) {
            return;
        }

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

        while ($arItem = $result->GetNext()) {
            $arResult['ITEMS'][] = [
                'NAME' => $arItem['NAME'],
                'DETAIL_TEXT' => $arItem['DETAIL_TEXT']
            ];
        }

       return $arResult;
    }
}