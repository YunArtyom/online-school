<?php

namespace App\Models\Traits;

trait TextMasks
{
    //просрочка ученика, просрочка учителя, оплата ученика, оплата для директора, работа проверена ученика
    public const REMINDER_TYPE_FOR_DIRECTOR_AND_TEACHER_TEXT_MASK = 'Напоминание: Срок проверки ДЗ SUBJECT “THEME” ученика NAME GRADE класс был просрочен! Пожалуйста проверьте домашнее задание!';

}
