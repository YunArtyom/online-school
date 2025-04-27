@php
    $class = $data['data']['grade'] . " класс";
    $description = $data['data']['description'];
    $courses = $data['data']['subjects']
@endphp
<style>
    /* Стили для редактора */
    .markdown-editor {
        display: none;
        margin-top: 15px;
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        padding: 15px;
        background: #fff;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .markdown-editor textarea {
        width: 100%;
        min-height: 200px;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-family: 'Consolas', monospace;
        resize: vertical;
        font-size: 14px;
        line-height: 1.5;
    }

    .editor-buttons {
        display: flex;
        gap: 10px;
        margin-top: 15px;
    }

    .editor-preview {
        margin-top: 15px;
        padding: 15px;
        border: 1px solid #eee;
        border-radius: 6px;
        background: #f9f9f9;
        min-height: 50px;
    }

    .homeWork-category-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 10px;
    }

    .edit-button {
        background: transparent;
        color: #5DB561;
        border: 1px solid #5DB561;
        padding: 5px 15px;
        border-radius: 15px;
        font-size: 14px;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .edit-button:hover {
        background-color: #5DB561;
        color: white;
    }

    /* Остальные существующие стили */
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
                <div class="homeWork-category">
                    <div class="homeWork-category-header">
                        <div>Описание обучения</div>
                        <button class="edit-button" id="editDescriptionBtn">Редактировать</button>
                    </div>
                    <div class="homeWork-category-body">
                        <div class="homeWork-category-text" id="descriptionView">
                            {!! $description !!}
                        </div>

                        <!-- Редактор Markdown -->
                        <div class="markdown-editor" id="markdownEditor">
                            <textarea id="descriptionEditor">{{ strip_tags($description) }}</textarea>
                            <div class="editor-buttons">
                                <button class="submit-button-green" id="saveDescriptionBtn">Сохранить</button>
                                <button class="submit-button-red" id="cancelEditBtn">Отмена</button>
                            </div>
                            <div class="editor-preview" id="markdownPreview"></div>
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
                @foreach($courses as $courseItems)
                    <a href="{{ url("/lesson/subjects/" . $courseItems['id']) }}" style="text-decoration: none; color: inherit;">
                        <div class="leciton-row-second">
                            <div class="leciton-cell-second">Полный курс {{ $courseItems['name'] }} {{ $class }}</div>
                            <div class="leciton-cell-second-last"><button class="submit-button-cell">Подробнее</button></div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="homeWork-sidebar">
            <div class="homeWork-sidebar-section" style="width: 450px;">
                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Начало занятий:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup23"
                    >{{$data['data']['startAt']}}
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в WON:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup8"
                    >{{$data['data']['priceWON'] }}
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в RUB:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup9"
                    >{{$data['data']['priceRUB'] }}
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в USD:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup10"
                    >{{$data['data']['priceUSD'] }}
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в WON:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup11"
                    >{{$data['data']['monthPriceWON'] }}
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в RUB:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup12"
                    >{{$data['data']['monthPriceRUB'] }}
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена помесячная в USD:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup13"
                    >{{$data['data']['monthPriceUSD'] }}
                    </span>
                </div>
                <br>

                <button class="submit-button-green">Ученики класса</button>
                <button class="submit-button-blue" onclick="window.location.href='/calendar'">Календарь класса</button>
                @if($data['data']['status'] == 'inactive')
                    <button class="submit-button-green">Выставить на продажу</button>
                @else
                    <button class="submit-button-yellow" id="open-popup34">Снять с продажи</button>
                @endif


                @if (request()->attributes->get('user')['type'] == 'student')
                    <div class="homeWork-section-span-check">
                        <span>Нужна помощь?</span>
                    </div>
                    <div class="homeWork-section-span">
                        <span>Нажмите здесь и задайте вопрос</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Подключаем библиотеки -->
<script src="{{ asset('projectRoot/assets/js/popUmBuyCourseInfo.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Элементы редактора
        const editBtn = document.getElementById('editDescriptionBtn');
        const saveBtn = document.getElementById('saveDescriptionBtn');
        const cancelBtn = document.getElementById('cancelEditBtn');
        const editor = document.getElementById('markdownEditor');
        const textarea = document.getElementById('descriptionEditor');
        const preview = document.getElementById('markdownPreview');
        const view = document.getElementById('descriptionView');

        // Инициализация marked.js
        marked.setOptions({
            breaks: true,
            gfm: true
        });

        // Обработчики событий
        editBtn.addEventListener('click', function() {
            view.style.display = 'none';
            editor.style.display = 'block';
            textarea.focus();
            updatePreview();
        });

        cancelBtn.addEventListener('click', function() {
            view.style.display = 'block';
            editor.style.display = 'none';
        });

        textarea.addEventListener('input', updatePreview);

        // Сохранение описания
        saveBtn.addEventListener('click', async function() {
            const newDescription = textarea.value;

            try {
                // Отправка данных на сервер
                const response = await fetch('/update-course-description', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({
                        description: newDescription,
                        course_id: {{ $data['data']['id'] ?? 0 }}
                    })
                });

                const data = await response.json();

                if (response.ok && data.success) {
                    view.innerHTML = marked.parse(newDescription);
                    view.style.display = 'block';
                    editor.style.display = 'none';
                    alert('Описание успешно обновлено');
                } else {
                    throw new Error(data.message || 'Ошибка сохранения');
                }
            } catch (error) {
                console.error('Ошибка:', error);
                alert(error.message);
            }
        });

        // Обновление превью
        function updatePreview() {
            preview.innerHTML = marked.parse(textarea.value || 'Превью будет отображено здесь');
        }
    });
</script>
