<div class="popup" id="popup33">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar10">✖</button>
        <div class="popup-buttons">
           <br>
            <h3>Вы уверены?</h3>
            <br>
            <button class="popup-button" style="background: darkred" id="full-width-button">Удалить</button>
        </div>
    </div>
</div>

<script>
    const openPopupButton33 = document.getElementById('open-popup33');
    const popup33 = document.getElementById('popup33');
    const closePopupButton33 = document.querySelector('.close-sidebar10');

    openPopupButton33.addEventListener('click', () => {
        popup33.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton33.addEventListener('click', () => {
        popup33.style.display = 'none'; // Скрываем поп-ап
    });
</script>
