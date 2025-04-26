@php
    $sidebarTitle = "Ученики";
    $sidebarItems = [
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
@endphp

@extends('layout.app')

@section('title', 'Ученики')

@section('css')
    {{ asset('projectRoot/assets/css/students.css') }}
@endsection

@section('content')
    <div class="wrapper">
        <!-- Сайдбар -->
        @component('components.sidebar', [
           'sidebarTitle' => $sidebarTitle,
           'sidebarItems' => $sidebarItems
       ])
        @endcomponent
        <!-- Отображение главной страницы -->
        <!-- Основной контент -->
        @include('pagesBody.students')
    </div>
@endsection
