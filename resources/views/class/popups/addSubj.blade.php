<div class="popup" id="popup22">
    <div class="popup-content-noadaptive">
        <button class="close-sidebar9">✖</button>
        <div class="popup-buttons">
            <br>
            <input type="text" id="subjectName" placeholder="Название">
            <input type="text" id="priceWON" placeholder="Цена в WON">
            <input type="text" id="priceRUB" placeholder="Цена в RUB">
            <input type="text" id="priceUSD" placeholder="Цена в USD">
            <textarea id="description" placeholder="Описание"></textarea>
            <button class="popup-button" id="create-sub">Создать</button>
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

    document.getElementById('create-sub').addEventListener('click', () => {
        const subjectName = document.getElementById('subjectName').value;
        const priceWON = document.getElementById('priceWON').value;
        const priceRUB = document.getElementById('priceRUB').value;
        const priceUSD = document.getElementById('priceUSD').value;
        const description = document.getElementById('description').value;

        const data = {
            name: subjectName,
            price_won: priceWON,
            price_rub: priceRUB,
            price_usd: priceUSD,
            description: description
        };

        fetch('/lesson/subjects', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                console.log('Success:', data);
                popup22.style.display = 'none'; // Скрываем поп-ап после успешного запроса
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    });
</script>
