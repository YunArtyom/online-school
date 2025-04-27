<div class="popup" id="popup23">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar26">✖</button>
        <div class="popup-buttons">
            <span>Дата</span>
            <br>
            <input type="date" id="date-input" placeholder="ДД.ММ.ГГ">
            <input type="hidden" id="inc_date" value="{{$data['data']['id'] ?? ''}}">
            <button class="popup-button" id="edit-data">Применить</button>
        </div>
    </div>
</div>

<script>
    const openPopupButton23 = document.getElementById('open-popup23');
    const popup23 = document.getElementById('popup23');
    const closePopupButton23 = document.querySelector('.close-sidebar26');
    const applyButton = document.getElementById('edit-data');
    const dateInput = document.getElementById('date-input');

    openPopupButton23.addEventListener('click', () => {
        popup23.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton23.addEventListener('click', () => {
        popup23.style.display = 'none'; // Скрываем поп-ап
    });

    applyButton.addEventListener('click', () => {
        const dateValue = dateInput.value;

        // Подготовка данных для отправки
        const data = {
            start_at: dateValue
        };

        // Отправка данных на сервер
        fetch('/api/lesson/grades/' + document.getElementById('inc_date').value, {
            method: 'PUT',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                console.log('Успех:', data);
                popup23.style.display = 'none'; // Скрываем поп-ап после успешной отправки
            })
            .catch(error => {
                console.error('Ошибка:', error);
            });
    });
</script>
