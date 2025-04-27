<div class="popup" id="popup-template" style="display: none;">
    <div class="popup-content-noadaptive" style="position: relative;">
        <button class="close-popup" style="position: absolute; top: 10px; right: 10px; background: none; border: none; font-size: 20px; cursor: pointer;">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p id="popup-currency-label">Цена</p>
            <br>
            <input type="text" id="popup-price" placeholder="Введите цену">
            <input type="hidden" id="inc_side" value="{{$data['data']['id'] ?? ''}}">
            <button class="popup-button save-popup">Сохранить</button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        let currentPopupType = null;

        function openPopup(currencyPlaceholder, popupType) {
            currentPopupType = popupType;
            const popup = document.getElementById('popup-template');
            popup.style.display = 'flex';
            const priceInput = popup.querySelector('#popup-price');
            priceInput.placeholder = currencyPlaceholder;
            priceInput.value = '';
        }

        function closePopup() {
            document.getElementById('popup-template').style.display = 'none';
        }

        function sendData() {
            const popup = document.getElementById('popup-template');
            const price = popup.querySelector('#popup-price').value;
            const incValue = document.getElementById('inc_side').value;

            const data = {
                [currentPopupType]: price,
            };

            fetch('/api/lesson/grades/' + incValue, {
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
                    closePopup();
                })
                .catch(error => {
                    console.error('Ошибка:', error);
                });
        }

        document.querySelector('.close-popup').addEventListener('click', closePopup);
        document.querySelector('.save-popup').addEventListener('click', sendData);

        // Кнопки открытия попапа
        document.getElementById('open-popup8')?.addEventListener('click', () => openPopup('Цена в Воннах', 'price_won'));
        document.getElementById('open-popup9')?.addEventListener('click', () => openPopup('Цена в Рублях', 'price_rub'));
        document.getElementById('open-popup10')?.addEventListener('click', () => openPopup('Цена в Долларах', 'price_usd'));
        document.getElementById('open-popup11')?.addEventListener('click', () => openPopup('Цена в Воннах', 'month_price_won'));
        document.getElementById('open-popup12')?.addEventListener('click', () => openPopup('Цена в Рублях', 'month_price_rub'));
        document.getElementById('open-popup13')?.addEventListener('click', () => openPopup('Цена в Долларах', 'month_price_usd'));
    });
</script>
