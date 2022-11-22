
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form_login.css">
</head>
<body>


        <div class="">
            <form action="Check_addmin_login.php" class="modal-content"  method="post">
            <div class="brand">
                เข้าสู่ระบบ
            </div>
            <div class="imgcontainer">
                <img src="./img/logo.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>รหัสนักศึกษา</b></label>
                <input type="text" placeholder="ป้อนรหัสนักศึกษา" name="uname" required>

                <label for="psw"><b>รหัสผ่าน</b></label>
                <input type="password" placeholder="ป้อนรหัสผ่าน" name="psw" required>
                    
                <?php
                    if ($_GET['text'] != "")
                    echo "<font color='red'>Username หรือ Password ไม่ถูกต้อง</font>"
                ?>

                <button type="submit" class="login-button">เข้าสู่ระบบ</button>
                <a href="login.php" style="text-decoration: none;">
                    <div class="Go-to-login" style="text-align: center;">กลับหน้าแรก</div>
                </a>
                
            </div>

            </form>
        </div>

</body>
</html>