@php
    $class = "8 класс";
    $description = "В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа.";
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
    .submit-button-red {
        background-color: rgb(200, 12, 27);
        color: white;
        border: none;
        padding: 10px;
        font-size: 16px;
        border-radius: 15px;
        cursor: pointer;
        margin-bottom: 15px;
        font-weight: 700;
    }
    .submit-button-yellow {
        background-color: rgb(244, 206, 90, 1);
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

                <a href="{{ url('calendar/') }}" style="text-decoration: none; color: inherit;">
                    <div class="leciton-row-second">
                        <div class="leciton-cell-second">Ежедневные темы по данному предмету</div>
                        <div class="leciton-cell-second-last">
                            <button class="submit-button-cell">Подробнее</button>
                        </div>
                    </div>
                </a>

                    <div class="leciton-row-second">
                        <div class="leciton-cell-second">Учителя по данному предмету</div>
                        <div class="leciton-cell-second-last">
                            <button class="submit-button-cell" id="open-popup19">Подробнее</button>
                        </div>
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

                <button class="submit-button-yellow" id="open-popup34">Снять с продажи</button>
                <button class="submit-button-green">Выставить на продажу</button>
                <button class="submit-button-red" id="open-popup33">Удалить предмет</button>

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
