<?php
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
                echo 'alert("Thêm tài khoản thành công")';
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


<!DOCTYPE Html>
<html>
<head>
    <title>Thêm tài khoản </title>
</head>
<body>
<form action="te3.php" method="post">
<div class="page_container">
      <div class="form_item">
      <div class="input_item">
          <label>ID</label>
          <input type="number" name="id" placeholder="Id" value="<?php echo $id;?>"><br><br>
        </div>
        <div class="input_item">
          <label>Tên tài khoản</label>
          <input type="text" name="username" placeholder="Username" value="<?php echo $userid;?>"><br><br>
        </div>
        <div class="input_item">
          <label>Mật khẩu</label>
          <input type="text" name="password" placeholder="Password" value="<?php echo $userid;?>"><br><br>
        </div>
        <div class="input_item">
            <label>Email</label>
            <input type="text" name="email" placeholder="Email" value="<?php echo $userid;?>"><br><br>
        </div>
        <div class="input_item">
            <label> Tên người dùng</label>
            <input type="text" name="fullname" placeholder="Fullname" value="<?php echo $userid;?>"><br><br>
            
        </div>
        <div class="input_item-1">
        <label>Ngày sinh</label>
        <input type="text" name="birthday" placeholder="Birthday" value="<?php echo $userid;?>"><br><br>
        
          
      </div>
      <div class="input_item">
        <label>Giới tính </label>
        <input type="text" name="sex" placeholder="Sex" value="<?php echo $userid;?>"><br><br>


    



    <td>

    <div>

        <input type="submit" name="insert" value="Thêm tài khoản">
        
<br>
<table class="table table-bordered table-condensed">
<thead>
    <tr>
        <th>Username</th>
        <th>Password</th>
        <th>Email</th>
        <th>Fullname</th>
        <th>Birthday</th>
        <th>Sex</th>
    </tr>
</thead>
<tbody>
            <?php

            $query=mysqli_query($connect,"SELECT * FROM `member`");
            while($row=mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $row['username']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['fullname']; ?></td>
                    
                    <td><?php echo $row['birthday']; ?></td>
                    <td><?php echo $row['sex']; ?></td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>




    </div>
</form>
</body>
</html>
