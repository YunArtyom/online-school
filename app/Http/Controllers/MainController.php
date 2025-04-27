<?php

namespace App\Http\Controllers;


use App\Facades\ApiCallFacade;
use Illuminate\Http\Request;


class MainController
{
    public function index(Request $request)
    {
        $data = ['test'];
        return view('main', [
            'data' => $data,
            'sidebarTitle' => "Главная страница",
            'sidebarItems' => $this->sidebarMenu(),
        ]);
    }

    private function sidebarMenu(): array
    {
        return [
            [
                'title' => 'Мои курсы',
                'icon' => 'pen',
                'link' => '#'
            ],
            [
                'title' => 'Календарь',
                'icon' => 'calendar',

                'link' => '/calendar'
            ],
            [
                'title' => 'Успеваемость',
                'icon' => 'star',

                'link' => '#'
            ],
            [
                'title' => 'Еще курсы',
                'icon' => 'plus',

                'link' => '#'
            ],
            [
                'title' => 'Доп. материал',
                'icon' => 'plus',

                'link' => '#'
            ],
            [
                'title' => 'Настройки',
                'icon' => 'setting',

                'link' => '#'
            ],
            [
                'title' => 'Частые вопросы',
                'icon' => 'question',

                'link' => '#'
            ],
        ];
    }
}
