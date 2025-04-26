<?php

namespace App\Http\Controllers\Topic;

use App\Models\Topic;

class TopicController
{
    public function getForUpdate($topic)
    {
       $data =  Topic::findOrFail($topic);
       $class = 'test';

        return view('topic.createTopic', [
            'data' => $data,
            'class' => $class,
            'sidebarTitle' => "Редактировать тему",
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
