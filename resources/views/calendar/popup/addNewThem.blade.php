<div class="popup" id="popup16" style="display: none;">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar17">✖</button>
        <div class="popup-buttons">
            <p class="p-one">Название</p>
            <input type="text" />
            <div class="popup-buttons-section">
                <button class="popup-button-noadaptive" id="full-width-button">Добавить</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openPopupButton16 = document.getElementById('open-popup16');
        const popup16 = document.getElementById('popup16');
        const closePopupButton16 = document.querySelector('.close-sidebar17');
        const addButton = document.getElementById('full-width-button');
        const inputField = popup16.querySelector('input[type="text"]');

        if (openPopupButton16 && popup16 && closePopupButton16) {
            openPopupButton16.addEventListener('click', () => {
                console.log('Открытие попапа 16');
                popup16.style.display = 'flex';
            });

            closePopupButton16.addEventListener('click', () => {
                popup16.style.display = 'none';
            });
        }

        if (addButton) {
            addButton.addEventListener('click', async () => {
                const name = inputField.value.trim();
                if (!name) {
                    alert('Введите название темы');
                    return;
                }

                try {
                    const response = await fetch('topic', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'Accept': 'application/json',
                        },
                        body: JSON.stringify({
                            name: name,
                            grade_id: 1,
                            subject_id: 1,
                        })
                    });

                    if (!response.ok) {
                        const errorData = await response.json();
                        console.error('Ошибка при создании темы:', errorData);
                        alert(errorData.message || 'Ошибка при создании темы');
                        return;
                    }

                    const result = await response.json();
                    console.log('Тема успешно добавлена:', result);

                    // Переход на страницу /topic
                    const id = result.data.id;
                    window.location.href = `/topic/${id}`;

                } catch (error) {
                    console.error('Ошибка запроса:', error);
                    alert('Ошибка при отправке запроса');
                }
            });
        }
    });
</script>
