@extends('layout.app')

@section('title', 'Описание курса')

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
        @include($template)

    </div>
    @include('class.popups.teachers')
    @include('class.popups.addSubj')
    @include('class.popups.sure')
    @include('class.popups.sure2')
    @include('class.popups.price')
    @include('class.popups.date')
@endsection
