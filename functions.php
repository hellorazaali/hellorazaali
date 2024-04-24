<?php
if (isset($_POST["popup-submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];

    // send email

    $to = "hellorazaali@gmail.com";
    $subject = "Razzus Official Popup form submitted";
    $message = "<table><tr><th>Name:</th><th>Email:</th></tr><tr><td>$name</td><td>$email</td></tr></table>";
    $from = "info@razzusofficial.com";
    $headers = "From: $from";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'hellorazaali@gmail.com',
        'password' => 'Raza@_ali2005'
    ));

    $mail = $smtp->send($to, $subject, $message, $headers);

    // add to the database

    $servername = "127.0.0.1:3306";
    $username = "u399447125_razzusofficial";
    $password = "Raza@_ali2005";
    $database = "u399447125_razzusofficial";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "INSERT INTO popupMail ( name , email) VALUES ('$name', '$email')";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}
if (isset($_POST["form-submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $project_type = $_POST["project-type"];
    $budget = $_POST["budget"];
    $message = $_POST["message"];
    


    $to = "hellorazaali@gmail.com";
    $subject = "Razzus Official Detailed form submitted";
    $message = "<table><tr><th>Name</th><th>Email</th><th>Project Type</th><th>Budget</th><th>Message</th></tr><tr><td>$name</td><td>$email</td><td>$project_type</td><td>$budget</td><td>$message</td></tr></table>";
    $from = "info@razzusofficial.com";
    $headers = "From: $from";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $subject, $message, $headers);

    // add to the database

    $servername = "127.0.0.1:3306";
    $username = "u399447125_razzusofficial";
    $password = "Raza@_ali2005";
    $database = "u399447125_razzusofficial";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
 
    $sql = "INSERT INTO detailMail ( name , email , project_type , budget , message) VALUES ('$name', '$email', '$project_type', '$budget', '$message')";
     mysqli_query($conn, $sql);
     mysqli_close($conn);
}
header("location:https://razzusofficial.com/index.php?submit=true");
?>