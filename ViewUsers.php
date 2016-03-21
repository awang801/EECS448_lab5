<html>
  <head>
    <title></title>
    <meta content="">
    <style></style>
  </head>
  <body>
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
    echo "<table border = '1'>";
        foreach($arr as $entry) {

            echo '<tr><td>';
            echo $entry[0];
            echo '</td></tr>';
        }

        echo"</table>"; 
        $mysqli->close();
?>
  </body>
</html>