@php
    $pageTitle = 'Дополнительный материал';
    $classLabel = 'Класс:';
    $subjectLabel = 'Предмет:';
    $classes = [
        'all' => 'Все',
        '8' => '8 класс',
        '9' => '9 класс',
    ];
    $subjects = [
        'all' => 'Все',
        'math' => 'Алгебра',
        'physics' => 'Физика',
        'chemistry' => 'Химия',
    ];
    $materials = [
        'Физика',
        'Химия',
        'Алгебра',
        'Литература',
        'Английский язык',
        'Биология',
        'Геометрия',
    ];
@endphp

<div class="content-wrapper">
    <div class="main-content">
        <h1 class="page-title">{{ $pageTitle }}</h1>

        <div class="material-filters">
            <div class="filter-select-wrapper">
                <label for="class-select">{{ $classLabel }}</label>
                <select id="class-select" class="filter-select">
                    @foreach($classes as $value => $label)
                        <option value="{{ $value }}" {{ $value === 'all' ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
            <div class="filter-select-wrapper">
                <label for="subject-select">{{ $subjectLabel }}</label>
                <select id="subject-select" class="filter-select">
                    @foreach($subjects as $value => $label)
                        <option value="{{ $value }}" {{ $value === 'all' ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="material-grid">
            <div class="material-card add-card">
                <div class="add-icon">
                    <span>+</span>
                </div>
            </div>

            @foreach($materials as $material)
                <div class="material-card">
                    <div class="card-image">
                        <img src="{{  asset('projectRoot/assets/pictures/theme.svg') }}" alt="">
                    </div>
                    <div class="card-title">{{ $material }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>
