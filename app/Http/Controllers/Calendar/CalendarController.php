<?php

namespace App\Http\Controllers\Calendar;

use App\Http\Controllers\Api\LessonController;
use App\Http\Requests\CalendarTopicsFormRequest;

class CalendarController
{
    public function index(CalendarTopicsFormRequest $request,LessonController $lessonController)
    {
        $request->merge([
            'month' => 4,
            'grade_id' => 1,
            'subject_id' => 1,
        ]);

        $data = $lessonController->calendarWithTopics($request);
        return view('calendar.calendar', [
            'data' => $data,
            'sidebarTitle' => "Календарь",
            'sidebarItems' => $this->sidebarMenu(),
        ]);
    }

    private function sidebarMenu(): array
    {
        return [
            ['link' => '#', 'icon' => 'bakalavr', 'title' => 'Успеваемость учеников'],
            ['link' => '#', 'icon' => 'pen', 'title' => 'Успеваемость учителей'],
            ['link' => '#', 'icon' => 'plus', 'title' => 'Дополнительный материал'],
            ['link' => '#', 'icon' => 'pen', 'title' => 'Ученики'],
            ['link' => '#', 'icon' => 'pen', 'title' => 'Учителя'],
            ['link' => '#', 'icon' => 'material', 'title' => 'Материал'],
            ['link' => '#', 'icon' => 'calendar', 'title' => 'Календарь'],
            ['link' => '#', 'icon' => 'setting', 'title' => 'Настройки'],
        ];
    }
}
