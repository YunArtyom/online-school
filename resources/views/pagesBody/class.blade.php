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
@endphp
<style>
    .submit-button-green {
        background-color: rgba(93, 181, 97, 1);
        color: white;
        border: none;
        padding: 10px;
        font-size: 16px;
        border-radius: 15px;
        cursor: pointer;
        margin-bottom: 15px;
        font-weight: 700;
    }
    .submit-button-blue {
        background-color: rgb(16, 51, 194);
        color: white;
        border: none;
        padding: 10px;
        font-size: 16px;
        border-radius: 15px;
        cursor: pointer;
        margin-bottom: 15px;
        font-weight: 700;
    }
</style>
    <!-- Основной контент -->
<div class="homeWork-content">
    <header class="homeWork-header">
        <div class="homeWork-header-text">
            < {{ $class }}</div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leciton-notification-item-body desktop">
                <div class="leciton-notification-item_text">Материал который входит в {{ $class }}</div>
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
            <div class="homeWork-sidebar-section" style="width: 450px;">
                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Начало занятий:</span>
                    <span class="teacherPage-acc-info-cell-right">2024.08.08</span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в WON:</span>
                    <span class="teacherPage-acc-info-cell-right">12.000.000</span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в RUB:</span>
                    <span class="teacherPage-acc-info-cell-right">12.000.000</span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в USD:</span>
                    <span class="teacherPage-acc-info-cell-right">12.000.000</span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в WON:</span>
                    <span class="teacherPage-acc-info-cell-right">1.000.000</span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в RUB:</span>
                    <span class="teacherPage-acc-info-cell-right">1.000.000</span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в USD:</span>
                    <span class="teacherPage-acc-info-cell-right">1.000.000</span>
                </div>
                <br>

                <button class="submit-button-green">Ученики класса</button>
                <button class="submit-button-blue" onclick="window.location.href='/calendar'">Календарь класса</button>
                <button class="submit-button-yellow">Снять с продажи</button>
                <button class="submit-button-green">Выставить на продажу</button>

                <div class="homeWork-section-span-check">
                    <span>Нужна помощь?</span>
                </div>
                <div class="homeWork-section-span">
                    <span>Нажмите здесь и задайте вопрос</span>
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
