<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../styles/login.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
</head>

<body>
<div class="login__container">
    <div id="overlay">
        <div class="login__picture">
        </div>
    </div>
    <div class="form__container">
        <div class="form__line__container">
            <div class="label__container">
                <label class="field__label">
                    Email
                </label>
            </div>
            <div class="field__container">
                <input type="text" class="username__input" placeholder="Enter Email" id="username">
            </div>
        </div>
        <div class="form__line__container">
            <div class="label__container">
                <label class="field__label">
                    Password
                </label>
            </div>
            <div class="field__container">
                <input type="password" class="password__input" placeholder="Enter password" id="password">
            </div>
        </div>
        <div class="checkboxes__container">
            <div class="remember__me__container">
                <label>
                    <input type="checkbox" class="remember__me__checkbox">
                </label>
                <label class="field__label remember__me__label">
                    Remember me
                </label>
            </div>
            <div class="forgot__password__container">
                <a href="http://www.google.ro" class="forgot__password__link">
                    Forgot password?
                </a>
            </div>
        </div>
        <div class="form__line__container">
            <button class="login__button" id="login">Login</button>
            <a href="http://www.google.ro" class="forgot__password__link">New here? <br> Sign up now!</a>
        </div>
    </div>
</div>
<script type="text/javascript" src="../../scripts/login.js"></script>
</body>
</html>