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
    
    $author_id = $_POST["author"];
    $query = "SELECT content FROM Posts WHERE author_id = '$author_id'";
        if ($result = $mysqli->query($query)){
    $arr = $result->fetch_all();
    }
    if(empty($arr)){
    echo "There are currently no posts made by this user";
    }
    else{
        echo "Posts made by $author_id:";
        echo "<br>";
        echo "<table border = '4'>";
        foreach($arr as $entry) {

            echo '<tr><td>';
            echo $entry[0];
            echo '</td></tr>';
        }

        echo"</table>"; 
    }
    $mysqli->close();
  ?>
  </body>
</html>