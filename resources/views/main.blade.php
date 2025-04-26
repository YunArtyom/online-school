@extends('layout.app')

@section('title', 'Главная страница')

@section('css')
    {{ asset('projectRoot/assets/css/MainPage.css') }}
@endsection

@section('content')
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
        @include('pagesBody.main')
    </div>
@endsection
