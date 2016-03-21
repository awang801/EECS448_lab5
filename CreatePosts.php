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
$author_id = $_POST['author_id'];
$content = $_POST['content'];
$query = "SELECT user_id FROM Users WHERE user_id = '$author_id'";

if ($result = $mysqli->query($query)) {
if (empty($result->fetch_all())){
    echo('This ID is not an existing user');
    }
else{
    $query = "SELECT * FROM Posts";
if ($result = $mysqli->query($query)) {
$arr = $result->fetch_all();
if (!empty($arr)){
$row = $result->num_rows-1;
$post_id = $arr[$row][0] + 1;
}
else{
$post_id = 1;
}
$query = "INSERT INTO Posts(post_id, content, author_id) VALUE('$post_id', '$content', '$author_id')";
if ($result = $mysqli->query($query)) {
echo('You have successfully created your Post!');
}
}
}
}
else{
echo('One of the fields was left empty or this ID is not an existing user');
}

/* close connection */
$mysqli->close();
?>
  </body>
</html>