<?php
require_once('dbconnection.php');

/*retrieves last row from the database*/

$sql = ("SELECT * FROM colors ORDER BY id DESC LIMIT 1");
$result = mysqli_query($mysqli, $sql);

if (!$result) {
  echo "no result";
  var_dump(mysql_error());
  die();
} else {
  $row = mysqli_fetch_assoc($result);
}
