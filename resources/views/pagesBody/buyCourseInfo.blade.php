@php
    $class = "8 класс";
    $description = "В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа.";
    $courses = [
        'Алгебра' => [
            ['name' => 'Умножение', 'price' => 800000],
            ['name' => 'Деление', 'price' => 800000],
            ['name' => 'Формулы', 'price' => 800000],
            ['name' => 'Расчет площади', 'price' => 800000],
        ],
        'Русский язык' => [
            ['name' => 'Как писать сочинения', 'price' => 800000],
            ['name' => 'Члены предложения', 'price' => 800000],
        ],
        'Физика' => [
            ['name' => 'Механика', 'price' => 850000],
            ['name' => 'Термодинамика', 'price' => 850000],
            ['name' => 'Электричество', 'price' => 850000],
        ],
        'Химия' => [
            ['name' => 'Органическая химия', 'price' => 900000],
            ['name' => 'Неорганическая химия', 'price' => 900000],
        ],
        'Биология' => [
            ['name' => 'Клеточная биология', 'price' => 750000],
            ['name' => 'Генетика', 'price' => 750000],
        ],
    ];
    $totalPrice = array_sum(array_map(fn($items) => array_sum(array_column($items, 'price')), $courses));
@endphp

    <!-- Основной контент -->
<div class="homeWork-content">
    <header class="homeWork-header">
        <div class="homeWork-header-text">
            < {{ $class }} / Алгебра / Умножение блок 1</div>
    </header>

    <div class="homeWork-content-wrapper">
        <div class="homeWork-notifications">
            <div class="homeWork-section">
                <!-- Algebra Section -->
                <div class="homeWork-category">
                    <div class="homeWork-category-header">
                        Описание обучения
                    </div>
                    <div class="homeWork-category-body">
                        <div class="homeWork-category-text">
                            {{ $description }}
                        </div>
                        <div class="homeWork-category-pictures">
                            <div class="pictures-wrapper">
                                <img src="{{ asset('projectRoot/assets/pictures/1.svg') }}" alt="Изображение 1">
                                <img src="{{ asset('projectRoot/assets/pictures/2.svg') }}" alt="Изображение 2">
                                <img src="{{ asset('projectRoot/assets/pictures/2.svg') }}" alt="Изображение 2">
                                <img src="{{ asset('projectRoot/assets/pictures/2.svg') }}" alt="Изображение 2">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leciton-notification-item-body desktop">
                <div class="leciton-notification-item_text">Материал который входит в данное обучение</div>
                @foreach($courses as $category => $courseItems)
                    @foreach($courseItems as $course)
                        <div class="leciton-row-second">
                            <div class="leciton-cell-second">Полный курс {{ $category }} {{ $class }}</div>
                            <div class="leciton-cell-second-last"><button class="submit-button-cell">Подробнее</button></div>
                        </div>
                    @endforeach
                @endforeach
            </div>

            <div class="leciton-notification-item-body mobile">
                <div class="leciton-notification-item_text" id="homeWorkHeaderLection">Предметы по курсу</div>
                <div class="leciton-notification-items" id="homeWorkBodyLection" style="display: none;">
                    @foreach($courses as $category => $courseItems)
                        @foreach($courseItems as $course)
                            <div class="leciton-row-second">
                                <div class="leciton-cell-second">Полный курс {{ $category }} {{ $class }}</div>
                                <div class="leciton-cell-second-last"><button class="submit-button-cell">Подробнее</button></div>
                            </div>
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>

        <div class="homeWork-sidebar">
            <div class="homeWork-sidebar-section">
                <button class="submit-button">Оплатить сразу за {{ number_format($totalPrice, 0, ',', ' ') }}</button>
                <div class="homeWork-section-span-check desktop">
                    <span>Или</span>
                </div>
                <button class="submit-button-yellow">Оплата помесячно {{ number_format($totalPrice / 12, 0, ',', ' ') }}</button>
                <div class="homeWork-section-span-check">
                    <span>Нужна помощь?</span>
                </div>
                <div class="homeWork-section-span">
                    <span>Нажмите здесь и зайдайте вопрос</span>
                </div>
                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Начало занятий</span>
                    <span class="teacherPage-acc-info-cell-right">2024.08.08</span>
                </div>
            </div>
        </div>

        <div id="popup" class="popup" style="display: none;">
            <div class="popup-content">
                <span class="close" id="closePopup">&times;</span>
                <div id="popupBody"></div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('projectRoot/assets/js/popUmBuyCourseInfo.js') }}"></script>
