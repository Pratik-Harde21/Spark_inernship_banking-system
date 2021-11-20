<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
<style>
    body{
            background-color :#a268c2;
        }
    th{
        background-color:#E040FB;
        color:black;
        border:2px solid #b8b8b8;
        
}
    td{
        text-align: center;
        border:2px solid #b8b8b8;
        background-color:#ecc8fff7;
    }

</style>

<body>
<nav id="navbar">
        <div id="logo">
            <img src="img/logo.jpg" alt="Sparks Bank">
        </div>
        <ul id="items">
            <li><a href="index.php">Home</a></li>
            <li><a href="sendmoney.php">Send Money</a></li>
            <li><a href="transactionhistory.php">Transactions</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </nav>


	<div class="container">
        <h2 class="text-center pt-4">Transaction History</h2>
        
    <br>
    <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'connection.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td><?php echo $rows['sno']; ?></td>
            <td><?php echo $rows['sender']; ?></td>
            <td><?php echo $rows['receiver']; ?></td>
            <td><?php echo $rows['balance']; ?> </td>
            <td><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }
        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>