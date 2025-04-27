@php
    $class = $data['class'] ?? '';

    $description = $data['description'] ?? '';
@endphp
<style>
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

    .edit-button:active {
        transform: scale(0.98);
        background-color: #4CAF50;
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
    .homeWork-category-header {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        display: flex;
        justify-content: space-between;
        align-items: center;
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

    /* Новые стили для редактора */
    .markdown-editor {
        display: none;
        margin-top: 15px;
    }

    .markdown-editor textarea {
        width: 100%;
        min-height: 200px;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-family: monospace;
        resize: vertical;
    }

    .editor-buttons {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .editor-preview {
        margin-top: 15px;
        padding: 15px;
        border: 1px solid #eee;
        border-radius: 5px;
        background: #f9f9f9;
    }
</style>

<!-- Основной контент -->
<div class="homeWork-content">
    <div class="homeWork-content-wrapper">
        <div class="homeWork-notifications">
            <div class="homeWork-section">
                <div class="homeWork-category">
                    <div class="homeWork-category-header">
                        Описание обучения
                        <button class="edit-button" id="editDescriptionBtn">Редактировать</button>
                    </div>
                    <div class="homeWork-category-body">
                        <!-- Блок с текущим описанием -->
                        <div class="homeWork-category-text" id="descriptionView">
                            {{ $description }}
                        </div>

                        <!-- Редактор Markdown (изначально скрыт) -->
                        <div class="markdown-editor" id="markdownEditor">
                            <textarea id="descriptionEditor">{{ $description }}</textarea>
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
                    <span class="homeWork-acc-info-cell">Цена в WON:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup14"
                    >{{$data['data']['priceUSD'] }}
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в RUB:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup15"
                    >{{$data['data']['priceRUB'] }}
                    </span>
                </div>

                <div class="homeWork-acc-info">
                    <span class="homeWork-acc-info-cell">Цена в USD:</span>
                    <span class="teacherPage-acc-info-cell-right"
                          style="text-decoration: underline;
                           cursor: pointer;" id="open-popup16"
                    >{{$data['data']['priceWON'] }}
                    </span>
                </div>
                <br>

                <button class="submit-button-yellow" id="open-popup34">Снять с продажи</button>
                <button class="submit-button-green">Выставить на продажу</button>
                <button class="submit-button-red" id="open-popup33">Удалить предмет</button>

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

        <div id="popup" class="popup" style="display: none;">
            <div class="popup-content">
                <span class="close" id="closePopup">&times;</span>
                <div id="popupBody"></div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('projectRoot/assets/js/popUmBuyCourseInfo.js') }}"></script>
<!-- Подключаем библиотеку для Markdown (например, marked.js) -->
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editBtn = document.getElementById('editDescriptionBtn');
        const saveBtn = document.getElementById('saveDescriptionBtn');
        const cancelBtn = document.getElementById('cancelEditBtn');
        const editor = document.getElementById('markdownEditor');
        const textarea = document.getElementById('descriptionEditor');
        const preview = document.getElementById('markdownPreview');
        const view = document.getElementById('descriptionView');

        // Обработчик кнопки редактирования
        editBtn.addEventListener('click', function() {
            view.style.display = 'none';
            editor.style.display = 'block';
            textarea.focus();
            updatePreview();
        });

        // Обработчик кнопки сохранения
        saveBtn.addEventListener('click', function() {
            const newDescription = textarea.value;

            // Здесь должна быть логика сохранения на сервер
            // Например, через AJAX-запрос:
            /*
            fetch('/update-description', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({ description: newDescription })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    view.innerHTML = marked.parse(newDescription);
                    view.style.display = 'block';
                    editor.style.display = 'none';
                }
            });
            */

            // Временно просто обновляем просмотр
            view.innerHTML = marked.parse(newDescription);
            view.style.display = 'block';
            editor.style.display = 'none';
        });

        // Обработчик кнопки отмены
        cancelBtn.addEventListener('click', function() {
            view.style.display = 'block';
            editor.style.display = 'none';
            textarea.value = view.textContent; // Возвращаем исходное значение
        });

        // Обновление превью при вводе
        textarea.addEventListener('input', updatePreview);

        function updatePreview() {
            preview.innerHTML = marked.parse(textarea.value);
        }
    });
</script>
