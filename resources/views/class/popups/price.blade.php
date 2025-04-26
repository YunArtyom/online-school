<div class="popup" id="popup8">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar16">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p>Цена</p>
            <br>
            <input type="text" placeholder="Цена в долларах"></input>
            <button class="popup-button" id="full-width-button1">Сохранить</button>
        </div>
    </div>
</div>

<div class="popup" id="popup9">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar2">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p>Цена</p>
            <br>
            <input type="text" placeholder="Цена в Воннах"></input>
            <button class="popup-button" id="full-width-button2">Сохранить</button>
        </div>
    </div>
</div>
<div class="popup" id="popup10">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar3">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p>Цена</p>
            <br>
            <input type="text" placeholder="Цена в Рублях"></input>
            <button class="popup-button" id="full-width-button3">Сохранить</button>
        </div>
    </div>
</div>

<div class="popup" id="popup11">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar4">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
           <p>Цена</p>
            <br>
            <input type="text" placeholder="Цена в Рублях"></input>
            <button class="popup-button" id="full-width-button3">Сохранить</button>
        </div>
    </div>
</div>

<div class="popup" id="popup12">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar5">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p>Цена</p>
            <br>
            <input type="text" placeholder="Цена в Рублях"></input>
            <button class="popup-button" id="full-width-button3">Сохранить</button>
        </div>
    </div>
</div>

<div class="popup" id="popup13">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar6">✖</button>
        <h2>Редактирование</h2>
        <div class="popup-buttons">
            <p>Цена</p>
            <br>
            <input type="text" placeholder="Цена в Рублях"></input>
            <button class="popup-button" id="full-width-button3">Сохранить</button>
        </div>
    </div>
</div>

<script>
    const openPopupButton8 = document.getElementById('open-popup8');

    const popup8 = document.getElementById('popup8');
    const closePopupButton8 = document.querySelector('.close-sidebar16');

    openPopupButton8.addEventListener('click', () => {
        popup8.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton8.addEventListener('click', () => {
        popup8.style.display = 'none'; // Скрываем поп-ап
    });



    const openPopupButton9 = document.getElementById('open-popup9');

    const popup9 = document.getElementById('popup9');
    const closePopupButton9 = document.querySelector('.close-sidebar2');

    openPopupButton9.addEventListener('click', () => {
        popup9.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton9.addEventListener('click', () => {
        popup9.style.display = 'none'; // Скрываем поп-ап
    });

    const openPopupButton10 = document.getElementById('open-popup10');

    const popup10 = document.getElementById('popup10');
    const closePopupButton10 = document.querySelector('.close-sidebar3');

    openPopupButton10.addEventListener('click', () => {
        popup10.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton10.addEventListener('click', () => {
        popup10.style.display = 'none'; // Скрываем поп-ап
    });

    const openPopupButton11 = document.getElementById('open-popup11');

    const popup11 = document.getElementById('popup11');
    const closePopupButton11 = document.querySelector('.close-sidebar4');

    openPopupButton11.addEventListener('click', () => {
        popup11.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton11.addEventListener('click', () => {
        popup11.style.display = 'none'; // Скрываем поп-ап
    });

    const openPopupButton12 = document.getElementById('open-popup12');

    const popup12 = document.getElementById('popup12');
    const closePopupButton12 = document.querySelector('.close-sidebar5');

    openPopupButton12.addEventListener('click', () => {
        popup12.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton12.addEventListener('click', () => {
        popup12.style.display = 'none'; // Скрываем поп-ап
    });


    const openPopupButton13 = document.getElementById('open-popup13');

    const popup13 = document.getElementById('popup13');
    const closePopupButton13 = document.querySelector('.close-sidebar6');

    openPopupButton13.addEventListener('click', () => {
        popup13.style.display = 'flex'; // Показываем поп-ап
    });

    closePopupButton13.addEventListener('click', () => {
        popup13.style.display = 'none'; // Скрываем поп-ап
    });

</script>
