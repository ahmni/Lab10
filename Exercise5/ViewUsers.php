<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "a467p218", "eeV7odoo", "a467p218");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}    

$query = "SELECT user_id FROM Users; ";

echo "<table>Users\n";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        echo "<td>". $row['user_id'] .  ",</td>";
       
        
    }
}
echo "</table>";

$result->free();
$mysqli->close();






?>