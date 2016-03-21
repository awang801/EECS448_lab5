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
    $toDelete = $_POST["toDelete"];

    if (empty($toDelete)){
    echo ("No Posts were chosen");
    }
    for ($x = 0; $x < count($toDelete); $x++){
    
    $post_id = $toDelete[$x];

    $query = "DELETE FROM Posts
              WHERE post_id = '$post_id'";
    
    if($result = $mysqli->query($query)){
    echo "<p>Post Number $post_id has been deleted</p>";
    }
    
    }
    $mysqli->close();
  ?>
  </body>
</html>