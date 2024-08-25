<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<div>
    <?php //dd($arResult['ARR_EXAMS']); ?>
    <?php if (!empty($arResult['ARR_EXAMS'])): ?>
        <?php foreach ($arResult['ARR_EXAMS'] as $exam): ?>
            <div>
                <h2><?= $exam['NAME'] ?></h2>
                <p><?= $exam['DATE_ACTIVE_FROM'] ?></p>
                <p><?= $exam['PROPERTY_TEACHER_VALUE'] ?></p>
                <p><?= $exam['PROPERTY_AUDITORIUM_VALUE'] ?></p>
                <hr>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Нет данных для отображения</p>
    <?php endif; ?>

</div>