<div class="leciton-content">
    @component('layout.header', [
        'title' => $breadcrumbs ?? 'Классы / 5 класс / Алгебра / Ежедневные уроки',
        'headerClass' => 'header_leciton_page desktop',
        'textClass' => 'header_leciton_page_text'
    ])
    @endcomponent
    <div class="leciton-notifications">
        <div class="leciton-notification-item_text desktop">Календарь тем по дням</div>
        <div class="leciton-notification-item_text mobile"> < Календарь</div>
        <div class="leciton-notification-item_text-second desktop">Август, 2024</div>
        <div class="for-mobile-arrows mobile">
            <button class="arrow left-arrow" id="prev-week">&#9664;</button> <!-- Стрелка влево -->
            <div class="leciton-notification-item_text-second" id="dateDisplay">Август, 2024</div>
            <button class="arrow right-arrow" id="next-week">&#9654;</button> <!-- Стрелка вправо -->
        </div>

        <div class="form-container mobile" id="formContainer" style="display: none;">
            <label class="monthSelectLabel" for="monthSelect">Выберите месяц:</label>
            <select class="monthSelect" id="monthSelect"></select>

            <label class="monthSelectLabel" for="yearSelect">Выберите год:</label>
            <select class="monthSelect" id="yearSelect"></select>

            <button class="monthSelectBtn" id="submitBtn">Сохранить</button>
        </div>

        <script src="{{ asset('projectRoot/assets/js/yearAndMonth.js') }}"></script>
        <div class="leciton-notification-item_content">
            @include('calendar.calendar_desktop', [])
            @include('calendar.calendar_mobile', [])
        </div>

        <script src="{{ asset('projectRoot/assets/js/nextOrPervWeek.js') }}"></script>

        <div class="leciton-notification-item_text desktop">Календарь тем по дням</div>

        <div class="leciton-buttons">
            <button class="leciton-button-outline desktop" id="open-popup16">Добавить новую тему</button>
        </div>

        <div class="leciton-notifications-second desktop">
            <div class="leciton-header-row-second">
                <div class="leciton-header-cell-second">Темы</div>
                <div class="leciton-header-cell-second">Присвоен к уроку</div>
                <div class="leciton-header-cell-second">Продается</div>
                <div class="leciton-header-cell-second">Цена</div>
                <div class="leciton-header-cell-second"></div>
            </div>

            <!-- Results Rows -->
            @foreach($data as $calendarResource)
                @php
                    $calendar = $calendarResource->resource;
                @endphp
                @foreach($calendar->schedules as $schedule)
                    <div class="leciton-row-second">
                        <div class="leciton-cell-second">{{ $schedule->topic->name }}</div>
                        <div class="leciton-cell-second">{{ $schedule->assigned }}</div>
                        <div class="leciton-cell-second">{{ $schedule->type }}</div>
                        <div class="leciton-cell-second">{{ $calendar->date->format('Y-m-d') }}</div>
                        <div class="leciton-cell-second">
                            <a href="{{ url('/createdThem') }}" style="color:inherit;">Редактировать</a>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>





