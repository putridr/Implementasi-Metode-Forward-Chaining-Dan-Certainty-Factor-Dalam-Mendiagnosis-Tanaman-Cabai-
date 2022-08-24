<?php $page = 'login' ?>
<html lang="en">

<head>
    <title>OurSispak | Login</title>
    <?php include('head.php') ?>
    <link rel="stylesheet" href="/sispak/assets/css/login.css">
</head>

<body class="scroll">
    <?php include('navbar.php'); ?>
    <div class="content">
        <div class="container d-flex justify-content-center">
            <div class="login-container">
                <form action="cek_login.php" class="form-login" method="POST">
                    <ul class="login-nav">
                        <li class="login-nav__item active d-flex justify-content-center">
                            <h4 style="color: black;font-weight:500px">MASUK AKUN</h4>
                        </li>
                    </ul>
                    <label for="login-input-user" style="font-weight: 500;" class="login__label">
                        Username
                    </label>
                    <input id="login-input-user" name="username" class="login__input" type="text" required />
                    <label for="login-input-password" style="font-weight: 500;" class="login__label">
                        Password
                    </label>
                    <input id="login-input-password" name="password" class="login__input" type="password" required />
                    <button class="login__submit" type="submit">Masuk</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>