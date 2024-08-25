<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
if (!CModule::IncludeModule("iblock")) {
    die('Модуль инфоблоков не подключен');
}

$iBlockElement = new CIBlockElement;

$arFilter = [
    "IBLOCK_ID" => $this->arParams["IBLOCK_ID"], // ID инфоблока передается через параметры компонента
    "ACTIVE" => "Y", // Только активные элементы
    "DATE_ACTIVE_FROM" => "ASC"
];

$arSelect = [
    "ID",
    "NAME",
    "DATE_ACTIVE_FROM",
    "PROPERTY_teacher",
    "PROPERTY_auditorium"
];
//Получение списка элементов
$rsElements = $iBlockElement->GetList([], $arFilter, false, false, $arSelect);

$arResult = [];
//Метод, который возвращает следующий элемент выборки в виде ассоциативного массива
while ($arElement = $rsElements->Fetch()) {
    $arResult[] = $arElement;
}
//Передача данных в шаблон компонента
$this->arResult = [
    'ARR_EXAMS' => $arResult
];
//Подключение шаблона компонента
$this->includeComponentTemplate();
?>