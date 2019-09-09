<?php
require_once('../dbconnection.php');

/*saves color code in the database*/
if (isset($_POST['color_code'])) {
  $color = $_POST['color_code'];
  $sql = ("INSERT INTO colors (color_id) values ('$color')");
  mysqli_query($mysqli, $sql);
}
