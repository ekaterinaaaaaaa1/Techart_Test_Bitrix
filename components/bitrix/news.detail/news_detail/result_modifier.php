<?php
if (!empty($arResult['DISPLAY_PROPERTIES']['THEMES'])) {
    $themes = array_map(fn($element) => "<a href=\"/news/theme-". $element['ID'] ."/page-1/\">" . $element['NAME'] . "</a>", $arResult['DISPLAY_PROPERTIES']['THEMES']['LINK_ELEMENT_VALUE']);
    $arResult['THEMES_STRING'] = "Темы: " . implode(", ", $themes) . ".";
}