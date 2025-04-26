@php
    $sidebarTitle = "Главная страница";
    $sidebarItems = [
        [
            'title' => 'Успеваемость учеников',
            'icon' => 'pen',
            'link' => '#'
        ],
        [
            'title' => 'Успеваемость учителей',
            'icon' => 'pen',

            'link' => '#'
        ],
        [
            'title' => 'Дополнительный материал',
            'icon' => 'plus',

            'link' => '#'
        ],
        [
            'title' => 'Ученики',
            'icon' => 'pen',

            'link' => '#'
        ],
        [
            'title' => 'Учителя',
            'icon' => 'pen',

            'link' => '#'
        ],
        [
            'title' => 'Материал',
            'icon' => 'setting',

            'link' => '/calendar'
        ],
        [
            'title' => 'Настройки',
            'icon' => 'setting',

            'link' => '#'
        ],
    ];

@endphp

@extends('layout.app')

@section('title', '')

@section('css')
    {{ asset('projectRoot/assets/css/buyCoursesInfo.css') }}
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
        @include('pagesBody.createdThem')
    </div>
@endsection
