<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dashboard.style.css">
</head>
<body >
<section>

    <h1>داشبورد</h1>
    <div class="tbl-header">
        <table >
            <thead>
            <tr>
                <th>نام</th>
                <th>نام خانوادگی</th>
                <th>ایمیل</th>
                <th>فعال</th>
                <th>حذف</th>
                <th>آپدیت</th>

            </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table>
            <tbody>
<!--            --><?php //foreach ($result as $item){ ?>
                <tr>
                    <td><input type="text" id="first_name<?=$item["id"]?>" value=<?=$item["first_name"] ?> /></td>
                    <td><input type="text" id="last_name<?=$item["id"]?>" value=<?=$item["last_name"] ?> /></td>
                    <td><input type="text" id="email<?=$item["id"]?>" value=<?=$item["email"] ?> /></td>
                    <td><input type="checkbox" id="checkbox<?=$item["id"]?>" value=<?=$item["is_activated"]?>/></td>
                    <td><button class="btn-delete" onclick="deleteHandler(<?=$item["id"]?>)">حذف</button></td>
                    <td><button class="btn-update" onclick="updateHandler(<?=$item["id"]?>)">آپدیت</button></td>

                </tr>
<!--            --><?php //}?>
            </tbody>

        </table>
    </div>

    <button id="log_out" class="log_out" > خروج از سامانه</button>
</section>



</div>
</body>
<script>
    document.getElementById("log_out").addEventListener("click",function (){
        document.location="/Logout.php"
    })
</script>
<script src="updateUser.js"></script>
<script src="deleteUser.js"></script>

