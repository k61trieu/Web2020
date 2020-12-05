<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trang Web thu thập thông tin xếp hạng đại học</title>
    <link href="../pubilc/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="../pubilc/js/bootstrap.js" rel="stylesheet" media="screen">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .main-header {
            background-color: #0b2e13;
            height: 80px;
            text-align: left;
            margin: 20px 50px;
        }
        .site-name {
            float: left;
            padding: 20px;
        }
        .top {
            float: right;
        }
        .header h1 {
            color: white;
            padding: 10px 0 0 0;
            margin-bottom: 0;
            vertical-align: middle;
        }
        .header h2 {
            color: white;
            padding: 0;
            vertical-aign: middle;
        }
        .clear {
            clear: both;
        }
        .main {
            width: 60%;
            height: auto;
            margin-top: 50px;
            margin-left: auto;
            padding-left: 100px;
            float: left;
        }
        .r-main {
            width: 30%;
            margin-top: 50px;
            margin-left: auto;
            height: auto;
            float: right;
        }
        .r-main ul {
            align-content: center;
            margin-top: 0;
            margin-bottom: 20px;
        }
        .r-main img {
            width: 250px;
            height: 180px;
        }
        .customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .customers td, .customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        .customers tr:nth-child(even){background-color: #f2f2f2;}

        .customers tr:hover {background-color: #ddd;}

        .customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #4CAF50;
            color: white;
        }
        .university {
            height: 80px;
            margin: 20px 50px;
            background-color: #b21f2d;
        }
        .university h2 {
            color: white;
            padding: 30px;
            vertical-align: middle;
        }
        .rank {
            margin: 0 50px;
        }
        .login {
            background-color: #ececf6;
        }
        .form-login {
            width: 50%;
            margin-left: auto;
            margin-right: auto;
        }
        .register {
            background-color: #ececf6;
        }
        .top-nav {
            margin-top:20px;
        }
        .btn-login {
            margin-left: 5px;
            margin-right: 15px;
        }
    </style>
</head>
<body>
<div class="main-header">
    <div class="site-name">
        <a href="#"><h1>TOP UNIVERSITIES</h1></a>
    </div>
    <div class="top">
        <div class="top-nav clearfix">

            <ul class="nav pull-right top-menu">
            <form action="result.php" method="POST">
            <center><table>
                <tr>
	
	<td><input type="text" name="name" placeholder="Nhập trường cần tìm" size="40"></td>
	<td><input type="submit" name="Search" ></td>
</tr>
</table></center>
</form>

                <button type="button" onclick="Login()">Đăng nhập</button>
                <script>
                    function Login(){
                        location.assign("login.php");
                    }
                </script>

            </ul>
            <!--search & user info end-->
        </div>
    </div>
    <div class="clear">

    </div>
</div>

</body>
</html>