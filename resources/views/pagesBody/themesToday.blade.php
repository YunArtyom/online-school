@php
    $headerText = '8 класс/Алгебра';
    $todayThemesTitle = 'Темы на сегодня';
    $themes = [
        [
            'status' => 'reviewing',
            'text' => 'Алгебраические дроби. Арифметические операции над алгебраическими дробями',
            'option' => 'Понятие алгебраической дроби. Применение основного свойства алгебраической дроби',
            'statusText' => 'Не проверено',
        ],
        [
            'status' => 'pending',
            'text' => 'Действительные числа',
            'option' => 'Множества натуральных чисел, целых чисел, рациональных чисел. Символы математического языка. Понятие квадратного корня. Понятие иррационального числа',
            'statusText' => '20/40 Баллов',
        ],
        [
            'status' => 'completed',
            'text' => 'Функция y = |x|. Функция квадратного корня y = √x',
            'option' => 'Модуль действительного числа и его геометрический смысл',
            'statusText' => 'Прочитано',
        ],
        [
            'status' => 'completed',
            'text' => 'Дроби',
            'option' => 'Понятие обыкновенной дроби',
            'statusText' => '40/40 баллов',
        ],
        [
            'status' => 'overdue',
            'text' => 'Неравенства',
            'option' => 'Понятие числовых промежутков',
            'statusText' => '10/40 баллов',
        ],
        [
            'status' => 'overdue',
            'text' => 'Квадратичная функция y = ax². Функция y = k/x',
            'option' => 'Квадратичная функция y = ax² и её свойства. Парабола',
            'statusText' => '10/40 баллов',
        ],
    ];
@endphp

<div class="content-wrapper">
    <!-- Основной контент -->
    <div class="themes-today-content">
        <header class="themes-today-header">
            <div class="themes-today-header-text">
                < {{ $headerText }} </div>
        </header>

        <div class="themes-today-notifications">
            <h3 class="themes-today-text">{{ $todayThemesTitle }}</h3>
            @foreach($themes as $theme)
                <div class="themes-today-item {{ $theme['status'] }}">
                    <div class="themes-today-item-content">
                        <div class="themes-today-item-text">{{ $theme['text'] }}</div>
                        <div class="themes-today-item-options">
                            <div class="decorative-block">
                                <img src="{{ asset('projectRoot/assets/image/decorative-second.svg') }}" alt="Частые вопросы"
                                     class="decorative-svg">
                            </div>
                            <span class="themes-today-item-option">{{ $theme['option'] }}</span>
                            <span class="themes-today-item-status">{{ $theme['statusText'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
