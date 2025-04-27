<?php

namespace App\Http\Controllers\Web;

use App\Facades\ApiCallFacade;
use App\Models\Grade;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GradeController
{
    public function grades()
    {
        return $this->renderView('/lesson/grades', 'Классы');
    }

    public function grade($grade)
    {
        $endpoint = '/lesson/grades/' . $grade->id;
        return $this->renderView($endpoint, 'Класс');
    }

    public function deactivateActivateGrade($grade)
    {
        $response = ApiCallFacade::put('/lesson/grades/deactivate-activate/' . $grade->id);

        return $response;
    }

    private function renderView(string $endpoint, string $title)
    {
        $response = ApiCallFacade::get($endpoint);

        $data = $response['data'] ?? [];
        $template = $this->resolveTemplate($endpoint);

        return view('class.class', [
            'data' => $data,
            'sidebarTitle' => $title,
            'sidebarItems' => $this->sidebarMenu(),
            'template' => $template,
        ]);
    }

    private function resolveTemplate(string $path): string
    {
        // определяем нужный шаблон по endpoint
        $map = [
            'lesson/grades' => 'class.classList',
            'lesson/grades/*' => 'class.classEdit',
            'lesson/class/*/subject/*' => 'class.classEditDetail',
        ];

        foreach ($map as $pattern => $view) {
            if (Str::is($pattern, ltrim($path, '/'))) {
                return $view;
            }
        }

        return 'class.classList';
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
