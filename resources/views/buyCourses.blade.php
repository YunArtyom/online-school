@php
    $sidebarTitle = "Купить курс";
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

@section('title', 'Купить курс')

@section('css')
    {{ asset('projectRoot/assets/css/buyCourses.css') }}
@endsection

@section('content')
    <script src="{{ asset('projectRoot/assets/js/openClose.js') }}"></script>
    <script src="{{ asset('projectRoot/assets/js/sidebar.js') }}"></script>
    <div class="wrapper">
        <!-- Сайдбар -->
        @component('components.sidebar', [
           'sidebarTitle' => $sidebarTitle,
           'sidebarItems' => $sidebarItems
       ])
        @endcomponent
        <!-- Отображение главной страницы -->
        <!-- Основной контент -->
        @include('pagesBody.buyCourse')
    </div>
@endsection
