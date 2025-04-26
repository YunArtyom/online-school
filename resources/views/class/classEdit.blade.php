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
    .add-button {
        background-color: rgba(93, 181, 97, 1);
        color: white;
        border: none;
        width: 24px;
        height: 24px;
        border-radius: 50%;
        font-size: 18px;
        line-height: 24px;
        text-align: center;
        cursor: pointer;
        margin-left: 10px;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .add-button:hover {
        background-color: rgba(76, 159, 80, 1);
        transform: scale(1.05);
    }

    .lesson-notification-item_text {
        display: flex;
        align-items: center;
        width: 100%;
    }
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
            <br>
            <div class="leciton-notification-item-body desktop">
                <div class="lesson-notification-item_text" style="display: flex; align-items: center; justify-content: space-between;">
                    <h2>Предметы которые входят в {{ $class }}</h2>
                    <div class="add-button" title="Добавить" id="open-popup22" style="margin-right: 50px">+</div>
                </div>
                <br>
                @foreach($courses as $category => $courseItems)
                    @foreach($courseItems as $index =>$course)
                        <a href="{{ url('class-edit/' . $index) }}" style="text-decoration: none; color: inherit;">
                            <div class="leciton-row-second">
                                <div class="leciton-cell-second">Полный курс {{ $category }} {{ $class }}</div>
                                <div class="leciton-cell-second-last"><button class="submit-button-cell">Подробнее</button></div>
                            </div>
                        </a>
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
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup23"
                    >2024.08.08
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в WON:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup8"
                    >12.000.000
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в RUB:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup9"
                    >12.000.000
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в USD:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup10"
                    >12.000.000
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в WON:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup11"
                    >1.000.000
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в RUB:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup12"
                    >1.000.000
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в USD:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup13"
                    >1.000.000
                    </span>
                </div>
                <br>

                <button class="submit-button-green">Ученики класса</button>
                <button class="submit-button-blue" onclick="window.location.href='/calendar'">Календарь класса</button>
                <button class="submit-button-yellow" id="open-popup34">Снять с продажи</button>
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
