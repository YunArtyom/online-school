<div style="width: 100%; padding: 30px; background: #f9f8fb; min-height: 100vh;">
    <h1 style="font-size: 32px; font-weight: bold; margin-bottom: 20px;">Классы</h1>

    <div style="display: flex; flex-direction: column; gap: 12px;">
        @foreach($data['data'] as $item)
            <a href="/lesson/grades/{{ $item['id'] }}" style="text-decoration: none; color: inherit;">
                <div style="
                    background: #dfe7f6;
                    border-radius: 12px;
                    padding: 20px 30px;
                    font-size: 18px;
                    font-weight: 500;
                    cursor: pointer;
                    height: 40px;
                    display: flex;
                    align-items: center;
                    justify-content: flex-start;
                ">
                    {{ $item['grade'] }} класс
                </div>
            </a>
        @endforeach
    </div>
</div>
