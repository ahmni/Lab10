<html>
<body>
    <p> User_ID: <?php $question1 = $_POST["q1"]; echo " " . $question1 . " "; ?></p>
   


<?php
    //access the global array called $_POST to get the values from the text
  
    $user = $_POST["q1"];
    $text = $_POST["post"];
    
    $mysqli = new mysqli("mysql.eecs.ku.edu", "a467p218", "eeV7odoo", "a467p218");
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }    

    $query = "SELECT user_id FROM Users Where user_id = ($user); ";
    $query2 = "INSERT INTO Posts (content, author_id) VALUES ('$text', '$user');";
    if ($user) {
        if ($result = $mysqli->query($query)) {
            if (!$text) {
                printf("Error: empty post");
            }
            if ($result = $mysqli->query($query2)) {

            } else {
                printf("Error: user not found");
            }
        } else {
            printf("Error: no user available");
        }
    } else {
        printf("Error: empty user");
    }
    $mysqli->close();
    
?>

</body>
</html>