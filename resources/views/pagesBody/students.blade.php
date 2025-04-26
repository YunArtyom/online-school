@php
    $pageTitle = 'Ученики';
    $filters = [
        'ФИО' => 'Мягкий Иван Евгеньевич',
        'Класс' => 'все',
    ];
    $tableHeaders = ['ФИО', 'Номер ученика', 'Тип/класс', 'Зарегистрирован'];
    $students = [
        [
            'name' => 'Мягкий Иван Евгеньевич',
            'number' => '030216650451',
            'type' => '8 класс + частичный',
            'registered' => '2024.08.08',
        ],
        [
            'name' => 'Мягкий Иван Евгеньевич',
            'number' => '030216650451',
            'type' => 'Частичный',
            'registered' => '2024.08.08',
        ],
        [
            'name' => 'Мягкий Иван Евгеньевич',
            'number' => '030216650451',
            'type' => '1 класс',
            'registered' => '2024.08.08',
        ],
        [
            'name' => 'Мягкий Иван Евгеньевич',
            'number' => '030216650451',
            'type' => 'Нет',
            'registered' => '2024.08.08',
        ],
    ];
@endphp

<div class="content-wrapper">
    <div class="main-content">
        <h1 class="page-title">{{ $pageTitle }}</h1>

        <header class="students-controls">
            <div class="filters">
                @foreach($filters as $key => $value)
                    <span class="filter-item">{{ $key }}: {{ $value }}</span>
                @endforeach
            </div>
        </header>

        <div class="students-table">
            <div class="table-header">
                @foreach($tableHeaders as $header)
                    <div class="table-cell">{{ $header }}</div>
                @endforeach
            </div>
            @foreach($students as $student)
                <div class="table-row">
                    <div class="table-cell">{{ $student['name'] }}</div>
                    <div class="table-cell">{{ $student['number'] }}</div>
                    <div class="table-cell">{{ $student['type'] }}</div>
                    <div class="table-cell">{{ $student['registered'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
