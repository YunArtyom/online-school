@extends('layout.app')

@section('title', 'Календарь')

@section('css')
    {{ asset('projectRoot/assets/css/lectionPage.css') }}
@endsection

@section('content')
    <div class="wrapper">
    <!-- Сайдбар -->
        @component('components.sidebar', [
            'sidebarTitle' => $sidebarTitle,
            'sidebarItems' => $sidebarItems
        ])
        @endcomponent
    <!-- Основной контент -->
        @include('calendar.calendarBody')
    </div>
<!-- Попап добавления новой темы -->
    @include('calendar.popup.addNewThem')
<!-- Скрипты после всех элементов -->

    <script src="{{ asset('projectRoot/assets/js/openClose.js') }}"></script>
    <script src="{{ asset('projectRoot/assets/js/sidebar.js') }}"></script>
@endsection
