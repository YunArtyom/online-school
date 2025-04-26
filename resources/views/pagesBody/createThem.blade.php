@php
    $class = "8 класс";
    $description = "В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа В данном уроке мы сможем научиться умножать числа.";
    $homeworkSections = [
        [
            'title' => 'Теория',
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
<style>
    .submit-button-green {
        background-color: rgba(93, 181, 97, 1);
        color: white;
        border: none;
        padding: 15px;
        font-size: 16px;
        border-radius: 10px;
        cursor: pointer;
        margin-bottom: 15px;
        font-weight: 700;
    }
    .submit-button-blue {
        background-color: rgb(16, 51, 194);
        color: white;
        border: none;
        padding: 15px;
        font-size: 16px;
        border-radius: 10px;
        cursor: pointer;
        margin-bottom: 15px;
        font-weight: 700;
    }

    .submit-button-red {
        background-color: rgb(200, 12, 27);
        color: white;
        border: none;
        padding: 15px;
        font-size: 16px;
        border-radius: 10px;
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
            <div class="homeWork-sidebar-section" style="width: 450px;">
                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Срок сдачи ДЗ:</span>
                    <span class="teacherPage-acc-info-cell-right">2021-08-08</span>
                </div>

                <br>

                <button class="submit-button-blue">Настройка оценки</button>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в WON:</span>
                    <span class="teacherPage-acc-info-cell-right" style="text-decoration: underline; cursor: pointer;" id="open-popup8">установить</span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в RUB:</span>
                    <span class="teacherPage-acc-info-cell-right" id="open-popup9">установить</span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в USD:</span>
                    <span class="teacherPage-acc-info-cell-right" id="open-popup10">установить</span>
                </div>
                <br>

                <button class="submit-button-yellow">Снять с продажи</button>
                <button class="submit-button-red">Удалить</button>
                <button class="submit-button-green">Прикрепить доп. материал</button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('projectRoot/assets/js/popUmBuyCourseInfo.js') }}"></script>
