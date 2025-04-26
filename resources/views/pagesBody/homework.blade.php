@php
    $class = "8 класс";
    $homeworkSections = [
        [
            'title' => 'Алгебра',
            'content' => 'В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем',
            'pictures' => [
                '1.svg',
                '2.svg'
            ]
        ],
        [
            'title' => 'Практика',
            'content' => [
                '1. Прочитайте данный материал: https://docs.google.com/document/d/1EWEo08EbhJOQ9CYUhTu6Q6hhDSbsVjXDJjEELKOhIgk/edit?usp=sharing',
                '2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tincidunt turpis. Nulla volutpat ligula eu lobortis condimentum. Integer nec lacus sodales, sodales velit a, sodales nibh. In hac habitasse platea dictumst. Etiam finibus neque nisl, eu ullamcorper elit vestibulum et. Aenean mauris ante, suscipit vel urna a, mollis dictum orci. Vestibulum hendrerit orci eu lobortis vehicula.',
                '3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tincidunt turpis. Nulla volutpat ligula eu lobortis condimentum. Integer nec lacus sodales, sodales velit a, sodales nibh. In hac habitasse platea dictumst. Etiam finibus neque nisl, eu ullamcorper elit vestibulum et. Aenean mauris ante, suscipit vel urna a, mollis dictum orci. Vestibulum hendrerit orci eu lobortis vehicula.',
                'image' => '1_long.svg',
                '4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tincidunt turpis. Nulla volutpat ligula eu lobortis condimentum. Integer nec lacus sodales, sodales velit a, sodales nibh. In hac habitasse platea dictumst. Etiam finibus neque nisl, eu ullamcorper elit vestibulum et. Aenean mauris ante, suscipit vel urna a, mollis dictum orci. Vestibulum hendrerit orci eu lobortis vehicula.',
                '5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tincidunt turpis. Nulla volutpat ligula eu lobortis condimentum. Integer nec lacus sodales, sodales velit a, sodales nibh. In hac habitasse platea dictumst. Etiam finibus neque nisl, eu ullamcorper elit vestibulum et. Aenean mauris ante, suscipit vel urna a, mollis dictum orci. Vestibulum hendrerit orci eu lobortis vehicula.'
            ],
            'pictures' => [
                '1.svg',
                '2.svg'
            ]
        ]
    ];
@endphp

<div class="homeWork-content">
    <header class="homeWork-header">
        <div class="homeWork-header-text">
            < {{ $class }} / Алгебра / Умножение блок 1
        </div>
    </header>

    <div class="homeWork-content-wrapper">
        <div class="homeWork-notifications">
            <div class="homeWork-section">
                @foreach($homeworkSections as $section)
                    <div class="homeWork-category desktop">
                        <div class="homeWork-category-header" onclick="toggleCategory(this)">
                            {{ $section['title'] ?? '' }}
                            <img class="icon_openClose" src="{{ asset('projectRoot/assets/image/checkOpenSecond.svg') }}" alt="Галочка открытия и закрытия">
                        </div>
                        <div class="homeWork-category-body">
                            @if(is_array($section['content']))
                                @foreach($section['content'] as $index => $content)
                                    @if($index === 'image')
                                        <div class="homeWork-category-pictures">
                                            <div class="pictures-wrapper">
                                                <img src="{{ asset('projectRoot/assets/pictures/' . $content) }}" alt="Изображение длинное" style="display: block; margin: 0 auto;">
                                            </div>
                                        </div>
                                    @else
                                        <div class="homeWork-category-text">{{ $content }}</div>
                                    @endif
                                @endforeach
                            @else
                                <div class="homeWork-category-text">{{ $section['content'] }}</div>
                            @endif
                            <div class="homeWork-category-pictures">
                                <div class="pictures-wrapper">
                                    @foreach($section['pictures'] as $picture)
                                        <img src="{{ asset('projectRoot/assets/pictures/' . $picture) }}" alt="Изображение">
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="homeWork-sidebar">

            <div class="homeWork-sidebar-section">
                <button class="submit-button">Отправить на проверку</button>
                <div class="homeWork-section-span">
                    <span>Задать вопрос</span>
                </div>
                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Срок сдачи:</span>
                    <span class="teacherPage-acc-info-cell-right">2024-08-08 15:00</span>
                </div>
                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Преподаватель:</span>
                    <span class="homeWork-acc-info-cell-right">Алла Николаевна</span>
                </div>
            </div>

            <div class="teacher-comments">
                <h4 class="teacher-comments-header">Комментарии от преподавателя:</h4>
                <div class="teacher-comments-block">
                    <span class="teacher-comments-info">Артём Юн 24 июня 2024г. в 17:32</span>
                    <p class="teacher-comments-text">В целом, домашнее задание выполнено хорошо. Ты
                        демонстрируешь уверенное владение
                        материалом. Продолжай регулярно выполнять домашние задания — это поможет тебе закрепить
                        знания и улучшить навыки решения алгебраических задач.
                        Если возникнут вопросы или трудности, не стесняйся обращаться ко мне за помощью. Я
                        всегда
                        готов помочь тебе разобраться в материале.
                        Желаю успехов в изучении алгебры!</p>
                </div>
                <div class="teacher-comments-block">
                    <span class="teacher-comments-info">Артём Юн 24 июня 2024г. в 17:32</span>
                    <p class="teacher-comments-text">Отлично выполнено! Ты правильно применил формулу
                        сокращённого умножения для разности
                        квадратов и получил верный ответ. Продолжай в том же духе!</p>
                </div>
            </div>

            <!-- Здесь расположен поп ап для мобильной версии, и мобильная версия блока -->
            <div class="homeWork-category mobile">
                <div class="homeWork-category-header" id="homeWorkHeaderAlgebra">
                    Алгебра
                </div>
                <div class="homeWork-category-body" id="homeWorkBodyAlgebra" style="display: none;">
                    <div class="homeWork-category-header">
                        Алгебра
                    </div>
                    <div class="homeWork-category-text">
                        В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться
                        умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы
                        сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа
                        В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться
                        умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы
                        сможем научиться умножать числа В данном у роке мы сможе
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
            <div class="homeWork-category mobile">
                <div class="homeWork-category-header" id="homeWorkHeaderPractice">
                    Практика
                </div>
                <div class="homeWork-category-body" id="homeWorkBodyPractice" style="display: none;">
                    <div class="homeWork-category-header">
                        Практика
                    </div>
                    <div class="homeWork-category-text">
                        1. Прочитайте данный материал:
                        <p>https://docs.google.com/document/
                            d/1EWEo08EbhJOQ9CYUhTu6Q6hhDSbsVjXDJjEELKOhIgk/edit?usp=sharing
                        </p>
                    </div>
                    <div class="homeWork-category-text">
                        2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tincidunt
                        turpis. Nulla volutpat ligula eu lobortis condimentum. Integer nec lacus sodales,
                        sodales velit a, sodales nibh. In hac habitasse platea dictumst. Etiam finibus neque
                        nisl, eu ullamcorper elit vestibulum et. Aenean mauris ante, suscipit vel urna a,
                        mollis dictum orci. Vestibulum hendrerit orci eu lobortis vehicula.
                    </div>
                    <div class="homeWork-category-pictures">
                        <div class="pictures-wrapper">
                            <img src="{{ asset('projectRoot/assets/pictures/1_long.svg') }}" alt="Изображение 2">
                        </div>
                    </div>
                    <div class="homeWork-category-text">
                        3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tincidunt
                        turpis. Nulla volutpat ligula eu lobortis condimentum. Integer nec lacus sodales,
                        sodales velit a, sodales nibh. In hac habitasse platea dictumst. Etiam finibus neque
                        nisl, eu ullamcorper elit vestibulum et. Aenean mauris ante, suscipit vel urna a,
                        mollis dictum orci. Vestibulum hendrerit orci eu lobortis vehicula.
                    </div>
                    <div class="homeWork-category-pictures">
                        <div class="pictures-wrapper">
                            <img src="{{ asset('projectRoot/assets/pictures/1.svg') }}" alt="Изображение 1">
                            <img src="{{ asset('projectRoot/assets/pictures/2.svg') }}" alt="Изображение 1">
                        </div>
                    </div>
                    <div class="homeWork-category-text">
                        4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tincidunt
                        turpis. Nulla volutpat ligula eu lobortis condimentum. Integer nec lacus sodales,
                        sodales velit a, sodales nibh. In hac habitasse platea dictumst. Etiam finibus neque
                        nisl, eu ullamcorper elit vestibulum et. Aenean mauris ante, suscipit vel urna a,
                        mollis dictum orci. Vestibulum hendrerit orci eu lobortis vehicula.
                    </div>
                    <div class="homeWork-category-text">
                        5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vitae tincidunt
                        turpis. Nulla volutpat ligula eu lobortis condimentum. Integer nec lacus sodales,
                        sodales velit a, sodales nibh. In hac habitasse platea dictumst. Etiam finibus neque
                        nisl, eu ullamcorper elit vestibulum et. Aenean mauris ante, suscipit vel urna a,
                        mollis dictum orci. Vestibulum hendrerit orci eu lobortis vehicula.
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
</div>
<script src="{{ asset('projectRoot/assets/js/poopUpHomeWork.js') }}"></script>
