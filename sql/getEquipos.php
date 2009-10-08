<?php
session_start();

include("connect.php");

$sql = "SELECT nombre FROM equipo";

$result = mysql_query($sql);

$rows = mysql_fetch_array($result);

echo "<select name = 'Equipo'>";
for each $row in $rows
    echo "<option value = '$row[nombre]'>'$row[nombre]'</option>";
end
echo "</select>"

?>
