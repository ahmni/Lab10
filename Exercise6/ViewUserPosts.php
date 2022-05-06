<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "a467p218", "eeV7odoo", "a467p218");
$user = $_POST["users"];
echo "USER: " . $user. "<br>";
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}    

$query = "SELECT content, author_id FROM Posts; ";



if ($result = $mysqli->query($query)) {
    
    while ($row = $result->fetch_assoc()) {
        if ($row['author_id'] == $user) {
            echo  "POST: " . $row['content'] . "</br>";
        }
       
    }
}


$result->free();
$mysqli->close();






?>