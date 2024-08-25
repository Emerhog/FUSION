<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php"); ?>
<?php $APPLICATION->SetTitle("install page"); ?>

<?php
if (!CModule::IncludeModule("iblock")) {
    die('Модуль инфоблоков не подключен');
}

$infoBlock = new CIBlock;
$iblockProperty = new CIBlockProperty;
$iBlockElement = new CIBlockElement;

$arFields = [
    "ACTIVE" => "Y",
    "NAME" => "Расписание экзаменов",
    "CODE" => "exams_list_iblock",
    "IBLOCK_TYPE_ID" => "lists",
    "SITE_ID" => ["s1"],
    "SORT" => 1, // Сортировка
    "DESCRIPTION" => "Список расписания экзаменов",
    "DESCRIPTION_TYPE" => "text",
    "GROUP_ID" => ["2" => "R"], // Права доступа для пользователей группа => права
];

$ID = $infoBlock->Add($arFields);

if ($ID > 0) {
    echo "Инфоблок успешно добавлен. ID: " . $ID;

    $arPropertyFields = [
        ["IBLOCK_ID" => $ID,
            "NAME" => "Преподаватель",
            "ACTIVE" => "Y",
            "SORT" => "1",
            "CODE" => "teacher",
            "PROPERTY_TYPE" => "S"],
        ["IBLOCK_ID" => $ID,
            "NAME" => "Аудитория",
            "ACTIVE" => "Y",
            "SORT" => "2",
            "CODE" => "auditorium",
            "PROPERTY_TYPE" => "N"],
    ];

    foreach ($arPropertyFields as $element) {
        $iblockProperty->Add($element);
    }

    $PROP = [
        ["teacher" => 'Иван Иванов',
            "auditorium" => 7],
        ["teacher" => 'Всилий Всильев',
            "auditorium" => 8],
        ["teacher" => 'Игорь игоревич',
            "auditorium" => 9],
        ["teacher" => 'Дмитрий Дмитриевич',
            "auditorium" => 10],
        ["teacher" => 'Александ Александров',
            "auditorium" => 11],
    ];
    $arLoadProductArray = [
        ["MODIFIED_BY" => 1,
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID" => $ID,
            "NAME" => "Элемент1",
            'PROPERTY_VALUES' => $PROP[0],
            "ACTIVE" => "Y",
            "ACTIVE_FROM" => date('d.m.Y'),
            "PREVIEW_TEXT" => "текст для списка элементов",
            "DETAIL_TEXT" => "текст для детального просмотра"],
        ["MODIFIED_BY" => 1,
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID" => $ID,
            "NAME" => "Элемент2",
            'PROPERTY_VALUES' => $PROP[1],
            "ACTIVE" => "Y",
            "ACTIVE_FROM" => date('d.m.Y'),
            "PREVIEW_TEXT" => "текст для списка элементов",
            "DETAIL_TEXT" => "текст для детального просмотра"],
        ["MODIFIED_BY" => 1,
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID" => $ID,
            "NAME" => "Элемент3",
            'PROPERTY_VALUES' => $PROP[2],
            "ACTIVE" => "Y",
            "ACTIVE_FROM" => date('d.m.Y'),
            "PREVIEW_TEXT" => "текст для списка элементов",
            "DETAIL_TEXT" => "текст для детального просмотра"],
        ["MODIFIED_BY" => 1,
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID" => $ID,
            "NAME" => "Элемент4",
            'PROPERTY_VALUES' => $PROP[3],
            "ACTIVE" => "Y",
            "ACTIVE_FROM" => date('d.m.Y'),
            "PREVIEW_TEXT" => "текст для списка элементов",
            "DETAIL_TEXT" => "текст для детального просмотра"],
        ["MODIFIED_BY" => 1,
            "IBLOCK_SECTION_ID" => false,
            "IBLOCK_ID" => $ID,
            "NAME" => "Элемент5",
            'PROPERTY_VALUES' => $PROP[4],
            "ACTIVE" => "Y",
            "ACTIVE_FROM" => date('d.m.Y'),
            "PREVIEW_TEXT" => "текст для списка элементов",
            "DETAIL_TEXT" => "текст для детального просмотра"]
    ];

    foreach ($arLoadProductArray as $element) {
        $iBlockElement->Add($element);
    }

} else {
    echo "Ошибка добавления инфоблока: " . $infoBlock->LAST_ERROR;
}
?>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
