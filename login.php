<?php include_once 'header.php';?>

<body class="login">
<div class="container" >
<form action="admin.php" class="form-login" method="post">

        <div class="form-group">
            <label>USERNAME</label>
            <input type="text" name="txtUsername" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">PASSWORD</label>
            <input type="password" name="txtPassword" class="form-control" id="password" placeholder="123" required>
        </div>
        <div>
            <?php
            if (isset($message))
                echo $message;
            ?>
        </div>
        <br/>
        <button type="submit" class="btn btn-primary" name="submit" > LOG IN </button>

        <br/>
        <br/>
        <a href='registerView.php' title='Register'>Register</a>

    </form>

</div>
<br></br><br></br><br></br>
</body>
<?php include_once 'footer.php';?>
<?php

session_start();
 

header('Content-Type: text/html; charset=UTF-8');
 

if (isset($_POST['dangnhap'])) 
{
 
    include('ketnoi.php');
     

    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    
    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
 

     
 
    $query = mysql_query("SELECT username, password FROM member WHERE username='$username'");
    if (mysql_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    
    $row = mysql_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $username;
    echo "Xin chào " . $username . ". Bạn đã đăng nhập thành công. <a href='/'>Về trang chủ</a>";
    die();
}
?>