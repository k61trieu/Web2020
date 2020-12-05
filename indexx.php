<?php
include_once 'header.php';
include_once "controller/IndexxController.php";
$universityId = $_GET["id"] == null ? 1 : intval($_GET["id"]);

$controller = new IndexxController();
$universityDetail = $controller->getUniversityDetailInfo($universityId);
?>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../pubilc/css/style.css">
    <link rel="stylesheet" type="text/css" href="../pubilc/css/main.css">
    <link rel="stylesheet" type="text/css" href="../pubilc/css/cc.css">
</head>

<body>
<div class="background1">
    <div class="container">
        <div class="title_info">
            <h1>
                    <span style="vertical-align: inherit;">
                        <span style="vertical-align: inherit;">
                            <?php
                            echo $universityDetail->getUniversity()->getUniversityName()
                            ?>
                        </span>
                    </span>
            </h1>
        </div>
    </div>
    <br><br>
    <div class="rank">
        <table class="customers">
            <tr>
                <th>Năm</th>
                <th>Số học sinh</th>
                <th>Tỉ lệ học sinh và giáo viên</th>
                <th>Học sinh quốc tế</th>
                <th>Học sinh nữ</th>
            </tr>
            <?php
            //            $detailEachYear = $universityDetail->getUniversityYearArray();
            foreach ($universityDetail->getUniversityYearArray() as $detail) {
//                var_dump($detail);
                echo "<tr>";
                echo "<td>" . $detail->getYear() . "</td>";
                echo "<td>" . $detail->getNumStudents() . "</td>";
                echo "<td>" . $detail->getStudentStaffRatio() . "</td>";
                echo "<td>" . $detail->getPctInternationalStudents() . "</td>";
//                var_dump($detail->getPctFemaleStudents());
                if ($detail->getPctFemaleStudents() != null) {
                    echo "<td>" . $detail->getPctFemaleStudents() . "</td>";
                } else {
                    echo "<td>Unknown</td>";
                }
                echo "<tr>";
            }
            ?>
        </table>
    </div>
    <div class="cart_navigation ">
        <a class="prev-btn" href="index.php"><font
                    style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quay về trang
                    chủ</font></font></a>
    </div>
</div>
<br><br><br>
</body>

<?php
include_once 'footer.php';
?>
