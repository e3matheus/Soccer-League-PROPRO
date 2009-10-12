<?php

include("connect.php");

$sql = "SELECT nombre FROM equipo";

$result = mysql_query($sql);

$rows = mysql_fetch_array($result);

echo "<select name = 'Equipo'>";
foreach ($row as $rows){
    echo "<option value = ".$row[nombre].">".$row[nombre]."</option>";
}
echo "</select>";

?>
