<?php
if (!empty($arResult['PROPERTIES']['COUNTRIES']['VALUE'])) {
    $countries = array_map(fn($element) => CIBlockElement::GetById($element)->GetNext()['NAME'], $arResult['PROPERTIES']['COUNTRIES']['VALUE']);
    $arResult['COUNTRIES_STRING'] = implode(", ", $countries) . ".";
}