<?php

error_reporting('E_RROR');
$alert="";

$server = "localhost";
$user = "root";
$password = "";
$db = "pdroid";

$conn = new mysqli($server,$user,$password,$db);

if($conn->connect_error){
    die("Error connecting ". $conn->connect_error);
}

if(isset($_POST['submit'])){
    $mail = $_POST['email'];

    $sql = "INSERT INTO `subscribe`(`mail`) VALUES ('$mail')";
    if ($conn->query($sql)) {
        # code...
        $headers = "FROM: peogrammingdroid2200@gmail.com";
        $message = "Dear ". $mail."<br /> Thank you for subscribing to out Newsletter and you will be notified anytime new courses are available.";
        if(mail($mail,"Subscribe to Newsletter",$message ,$headers)){
            $alert = "<div class='success'>Succefully Subscribed to our News letter</div>";
        }
    } else {
        # code...
        $alert = "<div class='danger'>Failed to subscribe..</div>";
    }
    
}


?>