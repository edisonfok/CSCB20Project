<?php
$permission = array(0,1,2);
include("session.php");
include("header.php");

echo "<link href=\"style.css\" rel=\"stylesheet\" type =\"text/css\">";
$count=!empty($_GET["iid"])?$_GET["iid"]:null;
// Create connection
$conn = $db;
// Check connection

$table = 'RemarkReq';
$sql = "SELECT * FROM ".$table;
$result = $conn->query($sql);

if (!$result)  die("Query to show fields from table failed!" . mysql_error());

if ($count== ""){
echo "<h1>Remark Requests of class {$table}</h1>";
echo "<div class='Table'><div class='TableRow'>";
// printing table headers
//for($i=0; $i<$fields_num; $i++) {	
//	$field = $result->fetch_field();	
echo "<div class='TableHead'><b> student #</b></div><div class='TableHead'><b> assignment name </b></div><div class='TableHead'><b> status </b><</div><div class='TableHead'><b> Change Status
</b></div>";
//}
echo "</div>\n";


while($roww = $result->fetch_assoc()) {	
	echo "<form><div class='TableRow'>";	
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
echo "<div class='TableCell'>$ssid</div>";	

echo "<div class='TableCell'>$san</div>";	
echo "<div class='TableCell'>$sass</div>";
echo "<div class='TableCell'><input type='submit' name='Submit' value='change'/>
<input type='hidden' name='iid' value='$ssid'/>
<input type='hidden' name='is' value='$san'/></div>";

echo "</div></form>\n";
}

echo "</div>\n";





}else{
$submit= !empty($_GET ["Submit"])?$_GET ["Submit"]:null;
$iid= !empty($_GET ["iid"])?$_GET ["iid"]:null;
$is= !empty($_GET ["is"])?$_GET ["is"]:null;
$return ='';
echo "change1";
//echo"$count";
if($submit='change'){

$sql ="UPDATE $table SET status=2 WHERE stuid='$iid' and assignment='$is'";
$return ='changed';
$conn->query($sql);
echo "change";

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

echo"</div></div></body>";
include("footer.php");

?>
