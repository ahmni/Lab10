<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "a467p218", "eeV7odoo", "a467p218");

if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$query = "SELECT post_id, content, author_id FROM Posts";
if ($result = $mysqli->query($query)) {
    echo "<h1>Posts Deleted:</h1>";
    while ($row = $result->fetch_assoc()) {
        $author = $row['author_id'];
        $post = $row['post_id'];
        $content = $row['content'];
        if ($_POST[$post] != "") {
            $toDelete = "DELETE FROM Posts WHERE post_id = '$post'";
            if ($deleteResult = $mysqli->query($toDelete)) {
                echo "<p>Successfully deleted '$post: $content'</p>";
            } else {
                echo "<p>Error: Delete did not work'$post: $content'</p>";
            }
        }
    }
    $result->free();
} else {
    echo "<p>No posts found</p>";
}
$mysqli->close();



?>