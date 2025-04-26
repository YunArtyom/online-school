<div class="popup" id="popup23">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar26">✖</button>
        <div class="popup-buttons">
            <span>Дата</span>
            <br>
            <input type="text" placeholder="ДД.ММ.ГГ"></input>
            <button class="popup-button" id="full-width-button">Применить</button>
        </div>
    </div>
</div>

<script>
    const openPopupButton23 = document.getElementById('open-popup23');
    const popup23 = document.getElementById('popup23');
    const closePopupButton23 = document.querySelector('.close-sidebar26');

    openPopupButton23.addEventListener('click', () => {
        popup23.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton23.addEventListener('click', () => {
        popup23.style.display = 'none'; // Скрываем поп-ап
    });
</script>
