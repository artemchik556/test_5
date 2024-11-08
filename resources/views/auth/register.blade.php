<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" required>
            <input type="email" name="email_confirmation" required placeholder="Подтверждение email">
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" required>
            <input type="password" name="password_confirmation" required placeholder="Подтверждение пароля">
        </div>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>
</html>
