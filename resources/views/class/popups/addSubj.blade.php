<div class="popup" id="popup22">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar9">✖</button>
        <div class="popup-buttons">
           <br>
            <input type="text" placeholder="Название"></input>
            <input type="text" placeholder="Цена в WON"></input>
            <input type="text" placeholder="Цена в RUB"></input>
            <input type="text" placeholder="Цена в USD"></input>
            <textarea type="text" placeholder="Описание"></textarea>
            <button class="popup-button" id="full-width-button">Создать</button>
        </div>
    </div>
</div>

<script>
    const openPopupButton22 = document.getElementById('open-popup22');
    const popup22 = document.getElementById('popup22');
    const closePopupButton22 = document.querySelector('.close-sidebar9');

    openPopupButton22.addEventListener('click', () => {
        popup22.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton22.addEventListener('click', () => {
        popup22.style.display = 'none'; // Скрываем поп-ап
    });
</script>
