

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบทดสอบออนไลน์</title>
    <link rel="stylesheet" href="login.css">
</head>
<style>
    #student{
    padding: 10px;
    background: green;
    margin-right: 10px;
    border-radius: 10px;
    font-size: 2rem;
    }

    #teacher{
        padding: 10px;
    background: green;
    margin-right: 10px;
    border-radius: 10px;
    font-size: 2rem;
    }

    #addmin{
    padding: 10px;
    background: green;
    border-radius: 10px;
    font-size: 2rem;
    }
</style>
<body>
    <nav>
        <div class="logo-nav">
            <h1>Quiz</h1>
        </div>
        <div class="menu-nav">
            <ul>
                <li><a href="login.php" >หน้าแรก</a></li>
                <li><a target="_blank" href="http://www.ctnphrae.com/">เว็บไซต์แผนก</a></li>
                <li><a target="_blank" href="https://www.facebook.com/ctnphrae10" style="margin-right: 30px;">เพจแผนก</a></li>
            </ul>
        </div>
    </nav>
    <div class="body">
        <div class="content">
            <div class="box-content">
                  <h1 style="font-size: 40px;">ระบบแบบทดสอบออนไลน์</h1>
                  <p style="margin-bottom: 30px; margin-top: 10px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, et.</p>
              <div class="login" style="display: flex; align-items: center; justify-content: center;">
              <a href="login_student.php">
                  <button id="student" type="submit" onclick="student()" style="cursor: pointer;">student</button>
              </a>
              <a href="login_teacher.php">
                  <button id="teacher" type="submit" onclick="" style="cursor: pointer;">teacher</button>
              </a>
              <a href="login_addmin.php">
                  <button id="addmin" type="submit" onclick="" style="cursor: pointer;">addmin</button>
              </a>
              </div>
            </div>
        </div>
    </div>


    <script src="login.js"></script>
</body>
</html>