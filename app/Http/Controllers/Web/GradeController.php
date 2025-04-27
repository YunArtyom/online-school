<?php

namespace App\Http\Controllers\Web;

use App\Facades\ApiCallFacade;

class GradeController
{
    public function get($grade)
    {
        return $this->renderView('/lesson/grades/' . $grade, 'Классы');
    }
    public function list()
    {
        return $this->renderView('/lesson/grades', 'Класс');
    }

    private function renderView(string $endpoint, string $title)
    {
        $response = ApiCallFacade::get($endpoint);

        return view('class.class', [
            'data' => $response['data'],
            'sidebarTitle' => $title,
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
