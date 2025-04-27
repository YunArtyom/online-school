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
        popup33.style.display = 'flex';
    });

    closePopupButton33.addEventListener('click', () => {
        popup33.style.display = 'none';
    });

    function sendData() {
        const data = { action: 'delete' };

        fetch('/test', {
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
                popup33.style.display = 'none';
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }

    document.getElementById('full-width-button').addEventListener('click', () => {
        sendData();
    });
</script>
