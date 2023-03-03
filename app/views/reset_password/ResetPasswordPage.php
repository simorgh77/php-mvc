
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

    <form action="sendMail.php" method="POST" enctype="multipart/form-data" class="form">

        <div class="wrapper">
            <h1>فراموشی رمز</h1>
            <div class="username-box">
                <input type="text" name="email" id="email" class="username" placeholder="ایمیل"/>

                <span class="error" id="email_notFound">  </span>

            </div>
            <button type="submit" class="submit-button" id="submit_button">تایید</button>
            <button type="button" class="submit-button" id="" ><a href="../Login/LoginPage.php"> بازگشت به صفحه ورود</a></button>


        </div>
    </form>
</div>
</body>
<script src="submit.js"> </script>
</html>
