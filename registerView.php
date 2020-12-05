<?php
include_once 'header.php';


$id = "";
$userid = "";
$pass= "";
$hostName = 'localhost';
// khai báo biến username
$u = 'root';
//khai báo biến password
$passWord = '';
// khai báo biến databaseName
$databaseName = 'web';
// khởi tạo kết nối
$connect = mysqli_connect($hostName, $u, $passWord, $databaseName);
//Kiểm tra kết nối
// if (!$connect) {
//     exit('Kết nối không thành công!');
// }
// // thành công
// echo 'Kết nối thành công!';

// get values from the form
function getPosts()


{
    $posts = array();
  
    $posts[0] = $_POST['id'];
    $posts[1] = $_POST['username'];
    $posts[2] = $_POST['password'];
    $posts[3] = $_POST['email'];
    $posts[4] = $_POST['fullname'];
    $posts[5] = $_POST['birthday'];
    $posts[6] = $_POST['sex'];

    return $posts;
}





if(isset($_POST['insert']))
{
    $data = getPosts();
    $insert_Query = "INSERT INTO `member`(`id`,`username`, `password`, `email`, `fullname`, `birthday`, `sex`) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]','$data[4]','$data[5]','$data[6]')";
    
    try{
        $insert_Result = mysqli_query($connect, $insert_Query);

        if($insert_Result)
        {
            if(mysqli_affected_rows($connect) > 0)
            {
                echo '<script language="javascript">';
                echo 'alert("Tạo tài khoản thành công")';
                echo '</script>';   
            }else{
                echo '<script language="javascript">';
                echo 'alert("Thất bại")';
                echo '</script>';   
            }
        }
    } catch (Exception $ex) {
        echo 'Lỗi '.$ex->getMessage();
    }
}
?>

<body class="register">

<div class="form-login">
    <div class="d-flex justify-content-between">
        <div>
            <h3>Đăng ký</h3>
        </div>
        <div>
            <a href="index.php" class="btn btn-info"><i class="fa fa-arrow-left" aria-hidden="true"></i> Return </a>
        </div>
    </div>
    <hr/>
<form action="login.php" method="post">
      <div class="form-group">
          <label>ID</label>
          <input type="number" class="form-control" name="id" placeholder="Id" value="<?php echo $id;?>">
        </div>
        <div class="form-group">
          <label>Tên tài khoản</label>
          <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $userid;?>">
        </div>
        <div class="form-group">
          <label>Mật khẩu</label>
          <input type="text" class="form-control" name="password" placeholder="Password" value="<?php echo $userid;?>">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $userid;?>">
        </div>
        <div class="form-group">
            <label> Tên người dùng</label>
            <input type="text" class="form-control" name="fullname" placeholder="Fullname" value="<?php echo $userid;?>">
            
        </div>
        <div class="form-group">
        <label>Ngày sinh</label>
        <input type="text" class="form-control" name="birthday" placeholder="Birthday" value="<?php echo $userid;?>">
        
          
      </div>
      <div class="form-group">
        <label>Giới tính </label>
        <input type="text" class="form-control" name="sex" placeholder="Sex" value="<?php echo $userid;?>">
      <div>
        <br><br>
        <input type="submit" name="insert" value="Tạo tài khoản">
        
<br>

</form>
</div>
<br><br><br>
</body>
</body>
