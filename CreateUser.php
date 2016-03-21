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
$user_id = $_POST['user_id'];
$query = "INSERT INTO Users(user_id) VALUES('$user_id')";

if ($result = $mysqli->query($query)) {

    echo('You have Successfully entered your User ID!');
}
else{
echo('The User ID you is either empty or already taken');
}

/* close connection */
$mysqli->close();
?>
  </body>
</html>