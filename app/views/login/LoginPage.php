<?php

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="../../../public/css/PublicStyles.css">
</head>
<body>

<div class="container">

    <div class="cover"></div>

<form action="login.php" method="POST" enctype="multipart/form-data" class="form">

    <div class="wrapper">
        <h1>صفحه ورود</h1>
        <div class="username-box">
        <input type="text" name="email" id="email" class="username" placeholder="ایمیل"/>

            <span class="error" id="email_notFound">  </span>
        </div>
        <div class="password-box">
        <input type="text" name="password" id="password" placeholder="رمز عبور">
                <span class="error" id="password_empty">  </span>
        </div>
        <div class="forget-password">
            <a href="../public/Register/RegisterPage.php">ثبت نام</a>
            <a href="../resetPassword/resetPassword.php">بازیابی رمز عبور</a>
        </div>
        <button type="button" class="submit-button" id="submit_button">ورود</button>
            <span class="error" id="not_found"> </span>
    </div>
</form>
</div>
</body>
<script src="../../../public/js/login.js"> </script>
</html>