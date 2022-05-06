<html>
<body>
    <p> User_ID: <?php $question1 = $_POST["q1"]; echo " " . $question1 . " "; ?></p>
   


<?php
    //access the global array called $_POST to get the values from the text
  
    $user = $_POST["q1"];
    
    $mysqli = new mysqli("mysql.eecs.ku.edu", "a467p218", "eeV7odoo", "a467p218");
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }    

    $query = "INSERT INTO Users VALUES ('$user'); ";
    if ($user) {
        if ($result = $mysqli->query($query)) {
            
        } else {
            printf("Error: already in list");
        }
    } else {
        printf("Error: empty user");
    }
    $mysqli->close();
    
?>

</body>
</html>