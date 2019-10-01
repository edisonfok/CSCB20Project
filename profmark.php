
<?php
$permission = array(1,2);
include("session.php");
include("header.php");

echo "<link href=\"style.css\" rel=\"stylesheet\" type =\"text/css\">";
$count=!empty($_GET["iid"])?$_GET["iid"]:null;
$conn = $db;

$table = 'mark';
$sql = "SELECT * FROM ".$table;
$result = $conn->query($sql);
echo"<body><div id='wrapper'><div id='main-content'>";
if (!$result)  die("Query to show fields from table failed!" . mysql_error());

if ($count== ""){
echo "<h1>The Grade of class {$table}</h1>";
echo "<div class='Table'><form><div class='TableRow'>";
// printing table headers
//for($i=0; $i<$fields_num; $i++) {	
//	$field = $result->fetch_field();	
echo "<div class='TableCell'><b> student #</b></div><div class='TableCell'><b> a1 </b></div><div class='TableCell'><b> a2 </b></div><div class='TableCell'><b> a3</b></div><div class='TableCell'><b> Changes
</b></div>";
//}
echo "</div></form>";


while($roww = $result->fetch_assoc()) {	
	echo "<form><div class='TableRow'>";	
	// $row is array... foreach( .. ) puts every element
	// of $row to $cell variable	
	//foreach($roww as $cell)		
	//	echo "<td>$cell</td>";	
        $ssid = $roww["stuid"];
	$sa1 = $roww['a1'];
	$sa2 = $roww['a2'];
	$sa3=$roww['a3'];
echo "<div class='TableCell'>$ssid</div>";	

echo "<div class='TableCell'><input type='text' name='1' value='$sa1'/></div>";	
echo "<div class='TableCell'><input type='text' name='2' value='$sa2'/></div>";
echo "<div class='TableCell'><input type='text' name='3' value='$sa3'/></div>";
echo "<div class='TableCell'><input type='submit' name='Submit' value='change'/>
<input type='hidden' name='iid' value='$ssid'/></div>";
echo "</div></form>\n";
}


echo "</div>\n";
}else{
$submit= !empty($_GET ["Submit"])?$_GET ["Submit"]:null;
$aa1= !empty($_GET ["1"])?$_GET ["1"]:null;
$aa2= !empty($_GET ["2"])?$_GET ["2"]:null;
$aa3= !empty($_GET ["3"])?$_GET ["3"]:null;
$iid= !empty($_GET ["iid"])?$_GET ["iid"]:null;
$return ='';
//echo"$count";
if($submit='change'){
$sql ="UPDATE mark SET a1='$aa1',a2='$aa2',a3='$aa3' WHERE stuid='$iid'";
$return ='changed';
}
//mysql_query($sql) ;
//echo $return;
else
{$sql= "select * from mark";
echo "stay the same";return;}

//if $submit =!empty($_GET ["Submit"])
//
//mysql_query($sql) ;
$conn->query($sql);
echo $return;
echo "<br/><a href='profmark.php'>Back to page</a>";
}
$conn->close();
echo"</div></div></body>";
include("footer.php");

?>
