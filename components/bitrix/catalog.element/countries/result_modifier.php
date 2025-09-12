<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var CBitrixComponentTemplate $this
 * @var CatalogElementComponent $component
 */

$component = $this->getComponent();
$arParams = $component->applyTemplateModifications();

if (!empty($arResult['PROPERTIES']['COUNTRIES']['VALUE'])) {
    $countries = array_map(fn($element) => CIBlockElement::GetById($element)->GetNext(), $arResult['PROPERTIES']['COUNTRIES']['VALUE']);
    $arResult['COUNTRIES_STRING'] = "Страны: " . implode(", ", $countries) . ".";
}

if (!empty($arResult['PROPERTIES']['subject']['VALUE'])) {
    $arResult['SUBJECT_STRING'] = "Тематика тура: " . CIBlockElement::GetById($arResult['PROPERTIES']['subject']['VALUE'])->GetNext();
}