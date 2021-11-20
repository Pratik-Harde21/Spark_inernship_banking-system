<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <script src="https://kit.fontawesome.com/ccc8dec2b5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/contact.css" type="text/css">
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
    include 'contactBck.php';
    ?>
    <section class="contact">
        <div class="content">
            <h2>Contact Us</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo nostrum saepe illum eligendi. Temporibus, dignissimos. Dolorum deleniti in atque, sapiente itaque voluptates tenetur excepturi rem ea quam, consequuntur qui pariatur hic, reiciendis consectetur architecto odit? Amet tempora animi dicta corrupti? Iure quibusdam doloremque omnis facere, aspernatur minima reprehenderit odio officiis recusandae.</p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker"></i></i></div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Pune</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">	
                        <i class="fa fa-envelope-o"></i></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>Edu.Pratik@gmail.com</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-linkedin-square"></i></div>
                    <div class="text">
                        <h3>LinkedIn Profile</h3>
                        <p>https://www.linkedin.com/in/pratik-harde/</p>
                    </div>
                </div>
            </div>
            <div class="contactform">
                <form action="contact.php" method="post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" id="name" required="required">
                        <span>Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="email" name="email" id="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required" id="message" name="message"></textarea>
                        <span>Type your message</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>