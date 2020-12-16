<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Экзамен №2");
?><?$APPLICATION->IncludeComponent(
	"simplecomp.exam:catalog",
	".default",
	Array(
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"COMPONENT_TEMPLATE" => ".default",
		"ELEMENT_COUNT" => "20",
		"ELEMENT_URL" => "#SITE_DIR#/#IBLOCK_CODE#/item/id/#ELEMENT_ID#/",
		"IBLOCK_ID" => "2",
		"IBLOCK_ITEMS_COUNT" => "5",
		"IBLOCK_TYPE" => "products",
		"PRODUCTS_IBLOCK_ID" => "",
		"PRODUCT_ID" => "5",
		"SET_TITLE" => "Y"
	)
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>