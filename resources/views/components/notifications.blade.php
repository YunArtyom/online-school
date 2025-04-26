@php
    $notifications = [
        [
            'icon' => 'exclamation',
            'alt' => 'Восклицательный знак',
            'title' => 'Внимание!',
            'message' => 'Пропущен срок сдачи задания по «Русский язык Сочинение»',
            'options' => [
                'Скрыть на 6 часов',
                'Перейти'
            ]
        ],
        [
            'icon' => 'whitestar',
            'alt' => 'Белая звезда',
            'title' => 'Всем от директора',
            'message' => 'Дорогие ученики, поздравляю вас с окончанием учебного года!',
            'options' => [
                'Перейти'
            ]
        ],
        [
            'icon' => 'heart',
            'alt' => 'Сердце',
            'title' => 'Лариса Генадьевна оценил вашу работу: Английский язык. «Перевод текста»',
            'message' => 'Результат',
            'grade' => '30/40 баллов',
            'options' => [
                'Перейти'
            ]
        ],
        [
            'icon' => 'heart',
            'alt' => 'Сердце',
            'title' => 'Лариса Генадьевна оценил вашу работу: Английский язык. «Перевод текста»',
            'message' => 'Результат',
            'grade' => '30/40 баллов',
            'options' => [
                'Перейти'
            ]
        ],
        [
            'icon' => 'exclamation',
            'alt' => 'Восклицательный знак',
            'title' => '',
            'message' => 'Осталось 7 дней до даты помесячной оплаты за 8 класс',
            'options' => [
                'Оплатить'
            ]
        ],
        [
            'icon' => 'heart',
            'alt' => 'Сердце',
            'title' => 'Лариса Генадьевна оценил вашу работу: Английский язык. «Глаголы»',
            'message' => 'Результат',
            'grade' => '30/40 баллов',
            'options' => [
                'Нет'
            ]
        ]
    ];
@endphp
<div class="notifications">
    <h3 class="notifications_main_text">Уведомления</h3>
    <div class="scroll-notification">
        @foreach($notifications as $notification)
            @component('components.notification-item', [
                'icon' => $notification['icon'],
                'alt' => $notification['alt'],
                'title' => $notification['title'],
                'message' => $notification['message'],
                'grade' => $notification['grade'] ?? null,
                'options' => $notification['options']
            ]) @endcomponent
        @endforeach
    </div>
</div>
