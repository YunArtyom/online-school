<div class="popup" id="popup34">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar11">✖</button>
        <div class="popup-buttons">
           <br>
            <h3>Вы уверены?</h3>
            <br>
            <button class="popup-button" style="background-color: rgba(244, 206, 90, 1)" id="full-width-button">Снять с продажи</button>
        </div>
    </div>
</div>

<script>
    const openPopupButton34 = document.getElementById('open-popup34');
    const popup34 = document.getElementById('popup34');
    const closePopupButton34 = document.querySelector('.close-sidebar11');

    openPopupButton34.addEventListener('click', () => {
        popup34.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton34.addEventListener('click', () => {
        popup34.style.display = 'none'; // Скрываем поп-ап
    });
</script>
