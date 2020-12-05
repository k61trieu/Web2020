
<!DOCTYPE html>
<head>
<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Responsive_table :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="../css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="../css/style.css" rel='stylesheet' type='text/css' />
<link href="../css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="../css/font.css" type="text/css"/>
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="../js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="#" class="logo">
        DANH MỤC
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>

<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
      <li>
          <a href="add_university.php"> <button class="button-menu" style="background-color: #8B5C7E;border-radius: 34%;color:aliceblue;">Thêm</button> </a>
        
      </li>
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="../img/avatar.jpg">
                <span class="username"> Admin </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="login.php"><i class="fa fa-key"></i> Log Out</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-th"></i>
                        <span>Quản lý</span>
                    </a>
                    <ul class="sub">
                        <li><a href="ql_nguoidung.php">Quản lý người dùng</a></li>
                        <li><a href="ql_truong.php"> Quản lý trường học</a></li>
                    </ul>
                </li>
                
                
			</ul>           
		 </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Quản lý trường
    </div>
    <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
           
            <th data-breakpoints="xs">ID</th>
            <th>Năm thu thập</th>
            <th>Tên hệ thống đánh giá</th>
            <th>SL sinh viên</th>
            <th data-breakpoints="xs" >TL sinh viên/giảng viên</th> 
            <th>TL sinh viên nước ngoài</th>
            <th>Điểm</th>
            <th> Chức năng</th>
          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td>1</td>
            <td>2020</td>
            <td>THE</td>
            <td>777</td>
            <td>15%</td>
            <td>20%</td>
            <td>50</td>

            <td>
              
              <button id = "deleteMovie" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
              Xóa
            </button>
              <button id = "updatedMovie" type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                Sửa
              </button>
            </td>
          </tr>
          
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.dcjqaccordion.2.7.js"></script>
<script src="../js/scripts.js"></script>
<script src="../js/jquery.slimscroll.js"></script>
<script src="../js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="../js/jquery.scrollTo.js"></script>
</body>
</html>
