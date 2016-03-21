<?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "awang", "password", "awang");

/* check connection */
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
    
    $query = "SELECT user_id FROM Users";
        if ($result = $mysqli->query($query)){
    $arr = $result->fetch_all();
    }
    
    echo "<select name = 'author' id = 'author'>";
    
        foreach($arr as $entry) {
        echo "<option value= '$entry[0]'>$entry[0] </option>";
        }
    
    echo "</select>";
    $mysqli->close();
?>

