<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="resetStyle.css">
</head>
<body>

<div class="container">

    <div class="cover"></div>

    <form action="changePass.php" method="POST" enctype="multipart/form-data" class="form">

        <div class="wrapper">
            <h1>تغییر رمز عبور</h1>

            <div class="password-box">
                <input type="text" name="password" id="password" placeholder="رمز عبور">

                <span class="error" id="password_empty">  </span>


            </div>
            <div class="password-box">
                <input type="text" name="repeat_password" id="repeat_password" placeholder="رمز عبور">

                <span class="error" id="error">  </span>


            </div>

            <button type="button" class="submit-button" id="submit_button" onclick="validation()">تایید</button>

        </div>
    </form>
</div>
</body>
<script src="validationPasswords.js">

</script>
</html>
