@php
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
            'История' => [
                ['name' => 'Древний мир', 'price' => 700000],
                ['name' => 'Средние века', 'price' => 700000],
                ['name' => 'Новое время', 'price' => 700000],
            ],
            'География' => [
                ['name' => 'Физическая география', 'price' => 650000],
                ['name' => 'Экономическая география', 'price' => 650000],
            ],
        ];

        $class = "8 класс";
        $subjectCount = "7";
@endphp
<div class="buy-courses-content">
    <header class="buy-courses-header">
        <div class="buy-courses-header-text">Купить курс</div>
    </header>

    <div class="buy-courses-notifications">
        <div class="buy-courses-body">
            <div class="breadcrumb">
                <div class="breadcrumb_option">
                    Полный курс предмета
                </div>
                <div class="breadcrumb_option">
                    <img src="{{ asset('projectRoot/assets/image/arrow.svg') }}" alt="arrow">
                    {{ $class }}
                </div>
                <div class="breadcrumb_option">
                    <img src="{{ asset('projectRoot/assets/image/arrow.svg') }}" alt="arrow">
                    {{ $subjectCount }} предметов
                </div>
                <div class="breadcrumb_option">
                    <img src="{{ asset('projectRoot/assets/image/arrow.svg') }}" alt="arrow">
                    Выбор разделов
                </div>
            </div>
            <div class="courses-header">
                <h2>4. Выберите один или несколько разделов по предметам</h2>
            </div>
            <div class="courses-section">
                @foreach($courses as $category => $courseItems)
                    <div class="course-category">
                        <div class="course-category-header" onclick="toggleCategory(this)">
                            {{ $category }}
                            <img class="icon_openClose" src="{{asset('projectRoot/assets/image/checkOpen.svg')}}" alt="Галочка открытия и закрытия">
                        </div>
                        <div class="course-category-body">
                            @foreach($courseItems as $course)
                                <div class="course-item desktop">
                                    <span class="course-name">{{ $course['name'] }}</span>
                                    <a class="href-info desktop" href="#">Узнать подробнее</a>
                                    <span class="course-price">{{ number_format($course['price'], 0, ',', ' ') }}</span>
                                    <input type="checkbox" class="course-checkbox">
                                </div>
                                <div class="course-item mobile">
                                    <div class="course-info">
                                        <span class="course-name">{{ $course['name'] }}</span>
                                        <div class="course-price-checkbox">
                                            <span class="course-price">{{ number_format($course['price'], 0, ',', ' ') }}</span>
                                            <input type="checkbox" class="course-checkbox">
                                        </div>
                                    </div>
                                    <a class="href-info mobile" href="#">Подробнее</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                <!-- Total and Action Buttons -->
                <div class="courses-summary">
                    <p>Итого: {{ count($courses, COUNT_RECURSIVE) - count($courses) }} разделов по {{ count($courses) }} курсам</p>
                    <p>Стоимость: {{ number_format(array_sum(array_map(fn($items) => array_sum(array_column($items, 'price')), $courses)), 0, ',', ' ') }}</p>
                    <div class="action-buttons">
                        <button class="btn-back">Назад</button>
                        <button class="btn-buy">Купить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
