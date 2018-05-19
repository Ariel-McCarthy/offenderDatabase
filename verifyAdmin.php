<?php
include "database.php";
$connect = getDBConnection();

// Checking credentials in database
$sql = "SELECT * FROM user WHERE user = :user AND password = :password";
        
$stmt = $connect->prepare($sql);
$data = array(":user" => $_POST['user'], ":password" => sha1($_POST['password'])); // sha1: to encrypt pass

$stmt->execute($data);
$user = $stmt->fetch(PDO::FETCH_ASSOC); //PDO an indexed array and an accociative array(showing elements)

//redirecting uto admin page if credentials are valid
if(isset($user['user']))
{
    $_SESSION['user'] = $user['user'];
    header('Location: admin.php');
} 
else {
    echo "The values you entered were incorrect.
    <a href='login.php' >Retry</a>";
}
?>