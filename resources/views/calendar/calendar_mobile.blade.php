<div class="calendar desktop mobile">
    @foreach($data as $calendarResource)
        @php
            $calendar = $calendarResource->resource;
        @endphp
        <div class="card{{ $calendar->schedules->isEmpty() ? '-gray' : '' }}">
            <h1>{{ $calendar->date->format('D') }}</h1>
            <hr>
            <div class="number">{{ $calendar->date->day }}</div>
            <div class="lessons">
                @forelse($calendar->schedules as $schedule)
                    <div class="lesson">{{ $schedule->topic->name }}</div>
                @empty
                    <div class="no-lessons">Нет тем/нет урока</div>
                    <div class="lesson-homework">Дата сдачи ДЗ</div>
                @endforelse
            </div>
        </div>
    @endforeach
</div>
