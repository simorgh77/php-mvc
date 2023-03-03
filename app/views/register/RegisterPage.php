<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../../public/css/PublicStyles.css">
</head>
<body>
<div class="container">

    <div class="cover"></div>

    <form action="register.php" method="post">

        <div class="wrapper">
            <h1>صفحه ثبت نام</h1>
            <div class="username-box">
                <input type="text" name="first-name" id="first-name" class="first-name" placeholder="نام"/>

                    <span class="error" id="firstName_empty"> </span>

            </div>
            <div class="username-box">
                <input type="text" name="last-name" id="last-name" class="last-name" placeholder="نام خانوادگی"/>
                    <span class="error" id="lastName_empty">  </span>
            </div>
            <div class="username-box">
                <input type="text" name="email" id="email" class="username" placeholder="ایمیل"/>

                    <span class="error" id="email_notFound"> </span>
            </div>
            <div class="password-box">
                <input type="text" name="password" id="password" placeholder="رمز عبور">

                    <span class="error" id="password_empty">  </span>


            </div>

            <span id="duplicated" class="error"></span>
            <div class="login_redirect">
                <a href="../Login/LoginPage.php">ورود</a>
            </div>
            <button type="button" id="submit_btn" class="submit-button">ثبت نام</button>
        </div>
    </form>
</div>
</body>
<script src="register.js"></script>
</html>