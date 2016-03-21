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

    $query = "SELECT * FROM Posts";
        if ($result = $mysqli->query($query)){
        $arr = $result->fetch_all();
        
        echo "<table border = '1'>";
        
        echo "<tr>
            <td> Post ID: </td>
            <td> Post: </td>
            <td> Author ID: </td>
            <td> Delete This Post: </td>
            </tr>";
        
        for($x = 0; $x < count($arr); $x++){
        echo "<tr>";    
            for ($y = 0; $y < count($arr[0]); $y++){
            echo "<td>";
            echo $arr[$x][$y];
            echo "</td>";
            }
        $post_id = $arr[$x][0];
        echo "<td> <input type = 'checkbox' name = 'toDelete[]' value = '$post_id'> </td>";
        echo "</tr>";
        }


        echo"</table>"; 
    }
    
    $mysqli->close();
  ?>
  </body>
</html>