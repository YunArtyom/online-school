@php
    $pageTitle = 'Регистрация';
    $logoText = 'Логотип';
    $formTitle = 'Регистрация';
    $nameLabel = 'ФИО';
    $countryLabel = 'Страна';
    $ageLabel = 'Возраст';
    $emailLabel = 'Email';
    $passwordLabel = 'Пароль';
    $confirmPasswordLabel = 'Подтвердите пароль';
    $policyText = 'Я ознакомлен (а) с <a href="#">Политикой конфиденциальности</a> и согласен (а) на обработку персональных данных';
    $submitButtonText = 'Зарегистрироваться';
    $countries = [
        '' => 'Выбрать страну',
        'Russia' => 'Россия',
        'South Korea' => 'Беларусь',
        'USA' => 'Казахстан',
    ];
@endphp

    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('projectRoot/assets/css/register.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="logo">{{ $logoText }}</div>

<div class="register-container">
    <form id="registerForm" class="register-form" novalidate>
        @csrf
        <h1>{{ $formTitle }}</h1>

        <div class="form-group">
            <label for="name">{{ $nameLabel }}</label>
            <input type="text" id="name" name="name" required>
            <div class="error-message" id="name-error"></div>
        </div>

        <div class="form-group">
            <label for="country">{{ $countryLabel }}</label>
            <select id="country" name="country" required>
                @foreach($countries as $value => $label)
                    <option value="{{ $value }}" {{ $value === '' ? 'disabled selected' : '' }}>{{ $label }}</option>
                @endforeach
            </select>
            <div class="error-message" id="country-error"></div>
        </div>

        <div class="form-group">
            <label for="age">{{ $ageLabel }}</label>
            <input type="number" id="age" name="age" min="12" max="100" required>
            <div class="error-message" id="age-error"></div>
        </div>

        <div class="form-group">
            <label for="email">{{ $emailLabel }}</label>
            <input type="email" id="email" name="email" required>
            <div class="error-message" id="email-error"></div>
        </div>

        <div class="form-group">
            <label for="password">{{ $passwordLabel }}</label>
            <input type="password" id="password" name="password" minlength="8" required>
            <div class="error-message" id="password-error"></div>
        </div>

        <div class="form-group">
            <label for="type">Тип</label>
            <select id="type" name="type" required>
                <option value="" disabled selected>Выбрать</option>
                <option value="teacher">Учитель</option>
                <option value="student">Ученик</option>
            </select>
            <div class="error-message" id="type-error"></div>
        </div>

        <div class="form-group checkbox-group">
            <input type="checkbox" id="policy" name="policy" required>
            <label for="policy">{!! $policyText !!}</label>
            <div class="error-message" id="policy-error"></div>
        </div>

        <button type="submit">{{ $submitButtonText }}</button>

        <div id="form-error" class="error-message" style="color: red; margin-top: 15px;"></div>
    </form>
</div>

<script>
    document.getElementById('registerForm').addEventListener('submit', async (e) => {
        e.preventDefault();

        // Очистка предыдущих ошибок
        document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

        try {
            const response = await fetch('{{ url('api/auth/register') }}', {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: new FormData(e.target)
            });

            const data = await response.json();

            if (response.ok) {
                window.location.href = data.redirect;
            } else {
                // Обработка ошибок валидации
                if (data.errors) {
                    Object.entries(data.errors).forEach(([field, messages]) => {
                        const errorElement = document.getElementById(`${field}-error`);
                        if (errorElement) {
                            errorElement.textContent = messages.join(', ');
                        }
                    });
                } else if (data.message) {
                    document.getElementById('form-error').textContent = data.message;
                }
            }
        } catch (error) {
            document.getElementById('form-error').textContent = 'Ошибка соединения с сервером';
        }
    });
</script>
</body>
</html>
