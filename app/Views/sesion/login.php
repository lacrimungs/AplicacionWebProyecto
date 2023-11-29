<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
        }
        .login-container h1 {
            color: #35c759;
            margin-bottom: 30px;
        }
        .login-container input {
            width: 100%;
            margin-bottom: 20px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #35c759;
            color: #fff;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #28a745;
        }
        .error-message {
            color: #dc3545;
            margin-bottom: 15px;
        }

        .styled-select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        background-image: url('data:image/svg+xml;utf8,<svg fill="#999" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path d="M7 10l5 5 5-5z"/><path d="M0 0h24v24H0z" fill="none"/></svg>');
        background-repeat: no-repeat;
        background-position: right 8px top 50%;
        background-size: 12px;
        background-color: #fff;
        cursor: pointer;
    }
    
    .styled-select:focus {
        outline: none;
        border-color: #66afe9;
    }
    </style>
</head>
<body>
<div class="login-container">
    <h1>Iniciar Sesión</h1>
    
    <?php if(session()->has('error')): ?>
        <div class="error-message"><?= session('error') ?></div>
    <?php endif; ?>

    <form action="/sesion/authenticate" method="post">
        <div>
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div class="user-type">
            <label for="userType">Quién eres:</label>
            <select id="userType" name="userType" class="styled-select">
                <option value="admin">Administrador</option>
                <option value="client">Cliente</option>
            </select>
        </div>
        <div>
            <button type="submit">Iniciar sesión</button>
        </div>
    </form>
</div>
