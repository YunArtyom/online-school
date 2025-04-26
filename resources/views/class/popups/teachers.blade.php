<div class="popup" id="popup19">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar20">✖</button>
        <div class="popup-buttons">
            <p class="p-one">Учителя</p>
            <div class="teachers-name">
                <p>Юн Артем</p>
                <button class="close-sidebar-spec">✖</button>
            </div>
            <div class="teachers-name">
                <p>Юн Артем</p>
                <button class="close-sidebar-spec">✖</button>
            </div>
            <div class="teachers-name">
                <p>Юн Артем</p>
                <button class="close-sidebar-spec">✖</button>
            </div>
            <div class="teachers-name">
                <p>Юн Артем</p>
                <button class="close-sidebar-spec">✖</button>
            </div>
            <div class="teachers-name">
                <p>Юн Артем</p>
                <button class="close-sidebar-spec">✖</button>
            </div>
            <div class="popup-buttons-section">
                <button class="popup-button-noadaptive" id="full-width-button">Прикрепить
                    нового
                    учителя</button>
            </div>
        </div>
    </div>
</div>


<script>
    const openPopupButton19 = document.getElementById('open-popup19');
    const popup19 = document.getElementById('popup19');
    const closePopupButton19 = document.querySelector('.close-sidebar20');

    openPopupButton19.addEventListener('click', () => {
        popup19.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton19.addEventListener('click', () => {
        popup19.style.display = 'none'; // Скрываем поп-ап
    });
</script>
