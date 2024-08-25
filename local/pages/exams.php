<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle(""); ?><?php $APPLICATION->SetTitle("Список экзаменов"); ?>
<?php

?><?$APPLICATION->IncludeComponent(
	"bitrix:exams.list",
	"",
	Array(
		"IBLOCK_ID" => 20
	)
);?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>