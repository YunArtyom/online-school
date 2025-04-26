@php

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
        @include('topic.createTopicBody')
    </div>
@endsection

<div class="popup" id="popup8">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar1">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p>Цена</p>
            <input type="text" placeholder="Цена в долларах"></input>
            <button class="popup-button" id="full-width-button1">Сохранить</button>
        </div>
    </div>
</div>
<div class="popup" id="popup9">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar1">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p>Цена</p>
            <input type="text" placeholder="Цена в Воннах"></input>
            <button class="popup-button" id="full-width-button2">Сохранить</button>
        </div>
    </div>
</div>
<div class="popup" id="popup10">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar1">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p>Цена</p>
            <input type="text" placeholder="Цена в Рублях"></input>
            <button class="popup-button" id="full-width-button3">Сохранить</button>
        </div>
    </div>
</div>

<script>
    const openPopupButton8 = document.getElementById('open-popup8');
    console.log(openPopupButton8);
    const popup8 = document.getElementById('popup8');
    const closePopupButton8 = document.querySelector('.close-sidebar1');

    openPopupButton8.addEventListener('click', () => {
        popup8.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton8.addEventListener('click', () => {
        popup8.style.display = 'none'; // Скрываем поп-ап
    });


</script>
