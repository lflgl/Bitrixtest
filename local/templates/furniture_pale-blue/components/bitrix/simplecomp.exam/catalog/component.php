<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

if (!isset($arParams['CACHE_TIME'])) {
    $arParams['CACHE_TIME'] = 3600;
}
if ($this->StartResultCache(false, rand(1,4))) {
    if (!CModule::IncludeModule('iblock')) {
        $this->AbortResultCache();
    }
    $arSelect = array(
        'NAME',
		'PROPERTY_PRICE',
		'PROPERTY_MATERIAL',
		'PROPERTY_ARTNUMBER'
    );
    $arFilter = array(
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
        'IBLOCK_ACTIVE' => 'Y',
        'ACTIVE' => 'Y',
        'ACTIVE_DATE' => 'Y'
    );
    $rsElements = CIBlockElement::GetList(
        $arSort,
        $arFilter,
        false,
        $arLimit,
        $arSelect
    );
    $arResult['ITEMS'] = array();
    while ($arItem = $rsElements->GetNext()) {
        $arResult['ITEMS'][] = $arItem;
    }
    $this->IncludeComponentTemplate();

}
?>