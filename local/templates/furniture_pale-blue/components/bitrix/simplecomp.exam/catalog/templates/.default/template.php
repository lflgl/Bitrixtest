<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();
?>
<?
// print "<pre>"; print_r($arResult);print "</pre>"; 
?>
<p><b><?=GetMessage("SIMPLECOMP_EXAM2_CAT_TITLE")?></b></p>
<?php foreach ($arResult['ITEMS'] as $arItem):?>
    <ul>
        <li><?=$arItem['NAME']?> - <?=$arItem['PROPERTY_PRICE_VALUE']?> - <?=$arItem['PROPERTY_MATERIAL_VALUE']?> - <?=$arItem['PROPERTY_ARTNUMBER_VALUE']?></li> 
    </ul>
<?php endforeach; ?>
