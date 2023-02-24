<?php 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    include_once('connect.php');
    if($conn->connect_error)
{
    die('Connection Failled: ' .$conn->connect_error);
}
else{
    $stmt = $conn->prepare(
        "INSERT INTO userdata (name, email, phone)
        values(?, ?, ?)"); 
    $stmt->bind_param("sss", $name, $email, $phone);
    $stmt->execute();

    
    header("Location: index.php");
    $stmt->close();
    $conn->close();
}
?>