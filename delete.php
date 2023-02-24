<?php
include_once('connect.php');
$id= $_GET['id'];
echo $id;
if ($conn->connect_error) {
  die('Connection Failled: ' . $conn->connect_error);
} else {
  $sql = "DELETE FROM userdata WHERE user_id= $id; ";

  if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }
}

$conn->close();
?>