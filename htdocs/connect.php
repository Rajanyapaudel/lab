<?php
$name =$_POST['name'];
$email =$_POST['email'];
$pass =$_POST['pass'];


$con=new
mysqli('localhost','root','','rikesh');
if(   $con->connect_error){
    die("Error connecting to database".$con->connect_error);
    
}
else{
    $stmt=$con->prepare("INSERT INTO rikesh (name,email,pass)value(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$pass);
    $stmt->execute();
    echo"registration Sucessful";
    $stmt->close();
    $con->close();
}
?>