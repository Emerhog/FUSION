<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$arComponentParameters = [
    //Основная группа параметров
    "GROUPS" => [
        "BASE" => [
            "NAME" => "Основные настройки",
        ],
    ],
    //Параметры для BASE
    "PARAMETERS" => [
        "IBLOCK_ID" => [
            "PARENT" => "BASE",
            "NAME" => "ID инфоблока",
            "TYPE" => "STRING",
            "DEFAULT" => '',
            "REFRESH" => "Y",
        ],
    ],
];

?>