<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/ccc8dec2b5.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/table.css">
</head>
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
    <?php
    include 'connection.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
?>
    <div class="text-center">
        <h1 class="text-center pt-4">Transfer Money</h1>
    </div>
    <div class="row">
                <div class="">
                    <div>
                    <table>
                        <thead>
                            <tr>
                            <th class="text-center py-1">Id</th>
                            <th class="text-center py-1">Name</th>
                            <th class="text-center py-1">E-Mail</th>
                            <th class="text-center py-1">Balance</th>
                            <th class="text-center py-1">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr>
                        <td><?php echo $rows['id']; ?></td>
                        <td><?php echo $rows['name']; ?></td>
                        <td><?php echo $rows['email']; ?></td>
                        <td><?php echo $rows['balance']; ?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'];?>"> <button type="button" class="btn" id="but">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
    </body>
</html>