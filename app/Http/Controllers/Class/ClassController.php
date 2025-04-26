<?php

namespace App\Http\Controllers\Class;

use App\Http\Controllers\Api\LessonController;
use App\Http\Resources\Grades\GradeResource;

class ClassController
{
    public function list(LessonController $lessonController)
    {
        $data = $lessonController->grades();
        return view('class.class', [
            'data' => $data,
            'sidebarTitle' => "Классы",
            'sidebarItems' => $this->sidebarMenu(),
        ]);
    }

    public function get($id)
    {
        $data = new GradeResource($id);
        return view('class.class', [
            'data' => $data,
            'sidebarTitle' => "Классы",
            'sidebarItems' => $this->sidebarMenu(),
        ]);
    }

    public function getForEdit($id)
    {
        $data = new GradeResource($id);
        return view('class.class', [
            'data' => $data,
            'sidebarTitle' => "Классы",
            'class' => $id,
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
