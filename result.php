<html>

<head>


<style>

table

{
	
border-style:solid;

border-width:2px;

border-color:green;
border-collapse: separate;
border-spacing: 200px 20px;

}

</style>

</head>

<body bgcolor="#EEFDEF">
<?php
$conn = mysqli_connect("localhost", "root", "","web");
//mysql_select_db("shikin", $conn);
//search code
//error_reporting(0);
if($_REQUEST['Search']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM university WHERE university_name LIKE '%$name%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		echo " <table class='anyClass'>";
   		echo "<tr>
             <th>ID</th>
             <th>Tên Trường</th>
             
        </tr>";
		while($row = mysqli_fetch_assoc($result)){
			echo "<tr> 
			<td>".$row['id']."</td> 
			<td>".$row['university_name']."</td> 
			     
		</tr>";
		echo "</table>";
	}
}else{


print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>

</body>

</html>
