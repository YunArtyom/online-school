@php
    $pageTitle = 'Вход';
    $logoText = 'Логотип';
    $role = 'директор';
    $formTitle = 'Вход в Онлайн школу как ' . $role;
    $emailLabel = 'Email';
    $passwordLabel = 'Пароль';
    $loginButtonText = 'Войти';
    $createAccountButtonText = 'Создать аккаунт';
    $forgotPasswordText = 'Забыли пароль?';
    $teacherLinkText = 'Я преподаватель';
@endphp

    <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <link rel="stylesheet" href="{{ asset('projectRoot/assets/css/login.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="logo">{{ $logoText }}</div>

<div class="login-container">
    <form id="loginForm" class="login-form" method="POST" action="{{route('login.post')}}" novalidate>
        @csrf
        <h1>{{ $formTitle }}</h1>

        <!-- Поле email -->
        <div class="form-group">
            <label for="email">{{ $emailLabel }}</label>
            <input type="email" id="email" name="email" required>
            <div class="error-message" id="email-error"></div>
        </div>

        <!-- Поле пароля -->
        <div class="form-group">
            <label for="password">{{ $passwordLabel }}</label>
            <input type="password" id="password" name="password" required>
            <div class="error-message" id="password-error"></div>
        </div>

        <!-- Кнопка входа -->
        <button type="submit" class="login-btn">{{ $loginButtonText }}</button>

        <!-- Дополнительные ссылки -->
        <div class="links-container">
            <a href="#" class="forgot-password">{{ $forgotPasswordText }}</a>
            <a href="#" class="teacher-link">{{ $teacherLinkText }}</a>
        </div>

        <!-- Кнопка создания аккаунта -->
        <button type="button" class="create-account-btn">{{ $createAccountButtonText }}</button>

        <!-- Общие ошибки формы -->
        <div id="form-error" class="error-message" style="color: red; margin-top: 15px;"></div>
    </form>
</div>

</body>
</html>
