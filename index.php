<?php
include_once 'header.php';
include_once "controller/IndexController.php";
$indexController = new IndexController();
$pageNo = $_GET["p"] == null ? 1 : intval($_GET["p"]);
$universityArray = $indexController->getUniversities($pageNo);
?>

<body>
<div class="container clearfix">
    <div class="main">
        <table class="customers">
            <tr>
                <th>STT</th>
                <th>
                    Tên trường
                </th>
                <th></th>
            </tr>
            <?php
            for ($i = 0; $i < sizeof($universityArray); $i++) {
                $id = $universityArray[$i]->getId();
                echo "
            <tr>
                <td>" . ($i + 1) . "</td>
                <td>" . $universityArray[$i]->getUniversityName() . "</td>
                <td>
                    <a href='indexx.php?id=$id'><input type=\"button\" value=\"More\" class=\"btn-more\" href='indexx.php?id=$id'></a>
                </td>
            </tr>

                ";
            }
            ?>
        </table>

    </div>
    <div class="r-main">
        <div>
            <ul>
                <a href="#"><img src="../img/img-qs.jpg"></a>
            </ul>
            <ul>
                <a href="#"><img src="../img/img-the.jpg"></a>
            </ul>
            <ul>
                <a href="#"><img src="../img/img-hus.jpg"></a>
            </ul>

        </div>
    </div>
    <div class="clear">

    </div>
</div>
<br></br><br></br><br></br>
</body>
<?php include_once 'footer.php'; ?>
