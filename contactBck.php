<?php
$insert = false;
if(isset($_POST['name'])){
    // Development Connection 
    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "bank_system";

    // Remote Database Connection 
    $server = "remotemysql.com";
    $username = "aEiagWP8Ko";
    $password = "B5eWzScfMt";
    $dbname = "aEiagWP8Ko";

    //Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("Connection to this database failed due to" . mysqli_connect_error());
    }

    // Collect post variable
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "    INSERT INTO `aEiagWP8Ko`.`contactus` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message');";

    //Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

