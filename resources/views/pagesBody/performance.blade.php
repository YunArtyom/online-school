@php
    $performanceData = [
        [
            'name' => 'Алгебра / 8 класс / Умножение блок 1',
            'result' => '75/80',
            'date' => '2024.08.08',
            'resultClass' => 'result-pass'
        ],
        [
            'name' => 'Алгебра / 8 класс / Умножение блок 1',
            'result' => 'Прочитано',
            'date' => '2024.08.08',
            'resultClass' => 'result-read'
        ],
        [
            'name' => 'Русский язык / 8 класс / Фонетика блок 1',
            'result' => '65/80',
            'date' => '2024.08.08',
            'resultClass' => 'result-warning'
        ],
        [
            'name' => 'Русский язык / 8 класс / Союз',
            'result' => '30/80',
            'date' => '2024.08.08',
            'resultClass' => 'result-fail'
        ],
        [
            'name' => 'Алгебра / 8 класс / Умножение блок 2',
            'result' => 'Просрочено',
            'date' => '2024.08.08',
            'resultClass' => 'result-overdue'
        ]
    ];
@endphp

<div class="performance-content">
    @component('layout.header', [
      'title' => 'Успеваемость',
      'headerClass' => 'performance-header',
      'textClass' => 'performance-header-text'
    ])
    @endcomponent

    <div class="sorting-options">
        <div class="sorting-item">
            <button class="sorting-button">Сортировать по <img src="{{ asset('projectRoot/assets/image/checkOpen.svg') }}" alt="Галочка открытия и закрытия"></button>
        </div>
        <div class="sorting-item">
            <button class="sorting-button">Предметы <img src="{{ asset('projectRoot/assets/image/checkOpen.svg') }}" alt="Галочка открытия и закрытия"></button>
        </div>
        <div class="sorting-item">
            <button class="sorting-button">Дата <img src="{{ asset('projectRoot/assets/image/checkOpen.svg') }}" alt="Галочка открытия и закрытия"></button>
        </div>
    </div>

    <div class="performance-notifications">
        <div class="performance-header-row">
            <div class="performance-header-cell">Название:</div>
            <div class="performance-header-cell">Результат:</div>
            <div class="performance-header-cell">Дата:</div>
        </div>

        <!-- Results Rows -->
        @foreach($performanceData as $data)
            <div class="performance-row">
                <div class="performance-cell">{{ $data['name'] }}</div>
                <div class="performance-cell {{ $data['resultClass'] }}">{{ $data['result'] }}</div>
                <div class="performance-cell">{{ $data['date'] }}</div>
            </div>
        @endforeach
    </div>
</div>
