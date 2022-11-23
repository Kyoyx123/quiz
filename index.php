<?php
	include("connectdb.php");
    session_start();
    $sql = "SELECT * FROM tb_member INNER JOIN jointthectn_tb ON tb_member.member_code=jointthectn_tb.member_code where tb_member.member_code='".$_SESSION['username']."'";
    $result = $conn->query($sql);
    $row=mysqli_fetch_array($result);

    if($row['member_code'] == ''){
        $sql = "SELECT * FROM tb_member where member_code='".$_SESSION['username']."'";
        $result = $conn->query($sql);
        $row=mysqli_fetch_array($result);
        $conn->close();
    }

    if($_SESSION['username'] != $row['member_code'] || $_SESSION['username'] == '')
    {
        header("location:login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<body>
    
<section class="main">
  <div class="btn btn-hamburger">
            <i class="fas fa-bars"></i>
        </div>
        <div class="sidebar">
            <div class="sidebar-top">
                <div class="sb-logo">
                   <a href="index.php">
                   <img src="./img/logo.png">
                   </a> 
                </div>
                <ul class="sb-ul">
                    <li>
                        <a href="index.php"><i class="fa-solid fa-user fontawesome"></i></i>โปรไฟล์</a>
                    </li>
                    <li>
                        <a href="create-quiz.php"><i class="fas fa-home fontawesome"></i>สร้างแบบทดสอบ</a>
                    </li>
                    <li>
                        <a href=""><i class="fas fa-home fontawesome"></i>ทดสอบ</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-home fontawesome"></i>ทดสอบ</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-home fontawesome"></i>ทดสอบ</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-home fontawesome"></i>ทดสอบ</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-home fontawesome"></i>ทดสอบ</a>
                    </li>
                </ul>
            </div>
            <div class="sidebar-bottom">
                <a href="login.php" class="btn btn-logout">ออกจากระบบ</a>
            </div>
        </div>
        <div class="dashboard">
        <h1 style="text-align: center;">ข้อมูลส่วนตัว</h1>
        <br>
                <div class='data' style="display: flex; justify-content: center;">
                    <img class='image' src='<?php if($row['img_url'] == '') echo 'css/pic/img_avatar.png'; else echo 'uploads/'.$row['img_url'];?>' width='167px' height='166px'>
                </div>
                <div class="main-profile">
                   
                        <div>
                        <label for=""><b>ชื่อ-นามสกุล</b></label>
                        <input type="text" value="<?php echo $row['member_title']." ".$row['member_firstname']." ".$row['member_lastname'] ?>" readonly  ?>
                        </div>

                        <div>
                            <label for=""><b>รหัสประจำตัวนักศึกษา</b></label>
                            <input type="text" value="<?php echo $row['member_code'] ?>" readonly>
                        </div>
                    
                        <div >
                            <label><b>เบอร์โทรศัพท์</b></label>
                            <input type="text" value="<?php echo $row['member_mobile']; ?>" readonly>
                        </div>

                        <div class="box4">
                            <label for=""><b>อีเมล</b></label>
                            <input type="text" value="<?php echo $row['member_email'] ?>" readonly>
                        </div>
                    
                        <div class="box5">
                            <label for=""><b>ที่อยู่</b></label>
                            <input type="text" value="<?php echo $row['member_address'] ?>" readonly>
                        </div>

                        <div class="box6">
                            <label for=""><b>สถานะ</b></label>
                            <input type="text" value="<?php echo $row['member_type'] ?>" readonly>
                        </div>
                    
                </div>


        </div>
    </section>
</body>
</html>