@php
    $teacherInfo = [
        'registered' => '2024-09-01',
        'name' => 'Юн Артём',
        'email' => 'yunartyom@mail.ru',
        'age' => 21,
        'country' => 'Корея',
        'directions' => '9 класс(полный), шахматы(частичный)',
        'additionalInfo' => ''
    ];

    $statusInfo = [
        'status' => 'В отпуске с 2024.08.20-2024.08.25'
    ];

    $activeDirections = [
        ['name' => 'Полный 9 класс', 'date' => '2024.08.08'],
        ['name' => 'Шахматы (частичный)', 'date' => '2024.08.08'],
        ['name' => 'Алгебра 8 класс теоремы', 'date' => '2024.08.08'],
        ['name' => 'Русский язык 8 класс разбор предложений', 'date' => '2024.08.08']
    ];

    $purchasedMaterials = [
        ['name' => 'Алгебра / 8 класс / Умножение блок 1', 'remaining' => 4, 'type' => 'Мой предмет', 'checkBy' => '2024-08-08'],
        ['name' => 'Алгебра / 8 класс / Умножение блок 1', 'remaining' => 25, 'type' => 'Мой предмет', 'checkBy' => '2024-08-08'],
        ['name' => 'Шахматы', 'remaining' => 25, 'type' => 'Мой предмет', 'checkBy' => '2024-08-08'],
        ['name' => 'Физика / 9 класс / Сила тяжести', 'remaining' => 25, 'type' => 'Отданный предмет', 'checkBy' => '2024-08-08'],
        ['name' => 'Физика / 9 класс / Cкорость', 'remaining' => 25, 'type' => 'Отданный предмет', 'checkBy' => '2024-08-08'],
        ['name' => 'Физика / 9 класс / Время', 'remaining' => 25, 'type' => 'Отданный предмет', 'checkBy' => '2024-08-08']
    ];

    $statistics = [
        ['name' => 'Проверенные домашние задания', 'count' => 111],
        ['name' => 'Домашние задания в ожидании проверки', 'count' => 5],
        ['name' => 'Просроченные домашние задания', 'count' => 20],
        ['name' => 'Домашних заданий было взято', 'count' => 15],
        ['name' => 'Кол-во заданий было отдано', 'count' => 10]
    ];
@endphp

<div class="teacherPage-content">
    @component('layout.header', [
      'title' => '< Учителя/Юн Артем',
      'headerClass' => 'teacherPage-header',
      'textClass' => 'teacherPage-header-text'
    ])
    @endcomponent

    <div class="teacherPage-info">
        <div class="teacherPage-info-full">
            <h2 class="teacherPage-header-info">Общая информация</h2>
            @foreach($teacherInfo as $key => $value)
                <div class="teacherPage-acc-info">
                    <span class="teacherPage-acc-info-cell">{{ ucfirst($key) }}:</span>
                    <span class="teacherPage-acc-info-cell">{{ $value }}</span>
                </div>
            @endforeach
        </div>
        <div class="teacherPage-info-status">
            <div class="teacherPage-acc-info">
                <span class="teacherPage-acc-info-cell">Статус:</span>
                <span class="teacherPage-acc-info-cell-right">{{ $statusInfo['status'] }}</span>
            </div>
            <div class="teacherPage-buttons-status">
                <button class="teacherPage-button-vouage">Отправить в отпуск</button>
                <button class="teacherPage-button-change_info">Редактировать информацию</button>
            </div>
        </div>
    </div>

    <div class="teacherPage-notifications">
        <div class="teacherPage-header-row">
            <div class="teacherPage-header-cell">Активные направления:</div>
            <div class="teacherPage-header-cell">Взят:</div>
        </div>

        <!-- Active Directions Rows -->
        @foreach($activeDirections as $direction)
            <div class="teacherPage-row">
                <div class="teacherPage-cell">{{ $direction['name'] }}</div>
                <div class="teacherPage-cell">{{ $direction['date'] }}</div>
            </div>
        @endforeach
        <div class="teacherPage-buttons">
            <button class="teacherPage-button-outline">Редактировать направления</button>
        </div>
    </div>

    <div class="teacherPage-notifications-second">
        <div class="teacherPage-header-row-second">
            <div class="teacherPage-header-cell-second">Купленный доп. материал</div>
            <div class="teacherPage-header-cell-second">Кол-во оставшихся работ:</div>
            <div class="teacherPage-header-cell-second">Тип</div>
            <div class="teacherPage-header-cell-second">Проверить до</div>
        </div>

        <!-- Purchased Materials Rows -->
        @foreach($purchasedMaterials as $material)
            <div class="teacherPage-row-second">
                <div class="teacherPage-cell-second">{{ $material['name'] }}</div>
                <div class="teacherPage-cell-second">{{ $material['remaining'] }}</div>
                <div class="teacherPage-cell-second">{{ $material['type'] }}</div>
                <div class="teacherPage-cell-second">{{ $material['checkBy'] }}</div>
            </div>
        @endforeach
        <div class="teacherPage-buttons">
            <button class="teacherPage-button-outline">Распределить проверку ДЗ</button>
        </div>
    </div>

    <div class="teacherPage-notifications-third">
        <div class="teacherPage-header-row-third">
            <div class="teacherPage-header-cell-third">Статистика</div>
            <div class="teacherPage-header-cell-third">Кол-во</div>
        </div>

        <!-- Statistics Rows -->
        @foreach($statistics as $stat)
            <div class="teacherPage-row-third">
                <div class="teacherPage-cell-third">{{ $stat['name'] }}</div>
                <div class="teacherPage-cell-third">{{ $stat['count'] }}</div>
            </div>
        @endforeach
        <div class="teacherPage-buttons">
            <button class="teacherPage-button-outline">Скачать статистику по всем учителям</button>
            <button class="teacherPage-button-red">Уволить</button>
        </div>
    </div>
</div>
