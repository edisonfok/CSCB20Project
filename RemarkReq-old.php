<?php
$count=!empty($_GET["iid"])?$_GET["iid"]:null;
// Create connection
$conn = new mysqli("localhost", 'wangmanq', 'wangmanq', 'cscb20w18_wangmanq');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$table = 'RemarkReq';
$sql = "SELECT * FROM ".$table;
$result = $conn->query($sql);

if (!$result)  die("Query to show fields from table failed!" . mysql_error());

if ($count== ""){
echo "<h1>Remark Requests of class {$table}</h1>";
echo "<table border='1'><tr>";
// printing table headers
//for($i=0; $i<$fields_num; $i++) {	
//	$field = $result->fetch_field();	
echo "<td><b> student #</b></td><td><b> assignment name </b></td><td><b> status </b></td><td><b> Change Status
</b></td>";
//}
echo "</tr>\n";


while($roww = $result->fetch_assoc()) {	
	echo "<tr><form>";	
	// $row is array... foreach( .. ) puts every element
	// of $row to $cell variable	
	//foreach($roww as $cell)		
	//	echo "<td>$cell</td>";	
        $ssid = $roww["stuid"];
	$san = $roww['assignment'];
	$sas = $roww['status'];
$sass="Submitted";
if ($sas ==2)
{$sass="Refused/Remarked";
}
echo "<td>$ssid</td>";	

echo "<td>$san</td>";	
echo "<td>$sass</td>";
echo "<td><input type='submit' name='Submit' value='change'/>
<input type='hidden' name='iid' value='$ssid'/>
<input type='hidden' name='is' value='$san'/></td>";
echo "</form></tr>\n";
}
}else{
$submit= !empty($_GET ["Submit"])?$_GET ["Submit"]:null;
$iid= !empty($_GET ["iid"])?$_GET ["iid"]:null;
$is= !empty($_GET ["is"])?$_GET ["is"]:null;
$return ='';
//echo"$count";
if($submit='change'){
$sql ="UPDATE $table SET status=2 WHERE stuid='$iid' and assignment='$is'";
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
echo "<br/><a href='RemarkReq.php'>Back to page</a>";
}
$conn->close();
?>
