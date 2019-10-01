<?php
$permission = array(0,1,2);
include("session.php");
include("header.php");

echo "<link href=\"style.css\" rel=\"stylesheet\" type =\"text/css\">";
$count=!empty($_GET["iid"])?$_GET["iid"]:null;
$table = 'mark';
$sql = "SELECT * FROM $table WHERE stuid = $id";
$result = $db->query($sql);
echo"<body><div id='wrapper'><div id='main-content'>";
if (!$result)  die("Query to show fields from table failed!" . mysqli_error($db));

if ($count== ""){
echo "<h1>Your mark is the following!</h1>";	
echo "<div class='Table'><form><div class='TableRow'><div class='TableHead'><b> assignment </b></div><div class='TableHead'><b> mark </b></div><div class='TableHead'><b> remark Request </b></div></div>";
echo "</tr>\n";
//}
$roww = $result->fetch_assoc();

$sa1 = $roww['a1'];
$sa2 = $roww['a2'];
$sa3 = $roww['a3'];

echo "<div class='TableRow'>
	<div class='TableCell'>assignment 1</div>
	<div class='TableCell'> $sa1 </div>";
echo "<div class='TableCell'><input type='submit' name='a1' value='Remarkrequest'/>";
echo "<input type='hidden' name='iid' value='$id'/></div>
	</div>\n";
echo "<div class='TableRow'><div class='TableCell'>assignment 2</div>
	<div class='TableCell'>  $sa2  </div>";
echo "<div class='TableCell'><input type='submit' name='a2' value='Remarkrequest'/>";
echo "<input type='hidden' name='iid' value='$id'/></div></div>\n";
echo "<div class='TableRow'><div class='TableCell'>assignment 3</div>
	<div class='TableCell'>$sa3</div>";
echo "<form><div class='TableCell'><input type='submit' name='a3' value='Remarkrequest'/>";
echo "<input type='hidden' name='iid' value='$id'/></div></div>\n</form>";


echo "</form></div>";
}else{
$iid= !empty($_GET ["iid"])?$_GET ["iid"]:null;
$submit= !empty($_GET ["Submit"])?$_GET ["Submit"]:null;
$a1 = !empty($_GET ["a1"])?$_GET ["a1"]:null;
$a2 = !empty($_GET ["a2"])?$_GET ["a2"]:null;
$a3 = !empty($_GET ["a3"])?$_GET ["a3"]:null;
if($a1 =='Remarkrequest'){
$sql ="INSERT INTO RemarkReq(stuid  ,
assignment ,
status ) VALUES ($id,'assignment 1',1)";
$db->query($sql);
echo "request a1 remark";
}else if($a2 =='Remarkrequest'){
$sql ="INSERT INTO RemarkReq(stuid  ,
assignment ,
status ) VALUES ($id,'assignment 2',1)";
$db->query($sql);
echo "request a2 remark";
}else if($a3 =='Remarkrequest'){
$sql ="INSERT INTO RemarkReq(stuid  ,
assignment ,
status ) VALUES ($id,'assignment 3',1)";
$db->query($sql);
echo "request a3 remark";
}

}
$db->close();
echo"</div></div></body>";
include("footer.php");

?>
