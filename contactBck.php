<?php
$insert = false;
if(isset($_POST['name'])){
    //Set connection variable
    $server = "localhost";
    $username = "root";
    $password = "";
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
    $sql = "    INSERT INTO `bank_system`.`contactus` (`Name`, `Email`, `Message`) VALUES ('$name', '$email', '$message');";

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

