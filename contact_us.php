<?php
include "conection.php";
error_reporting($level=NULL);
   if(isset($_POST['submit'])){
   
   $name =$_POST['fname'];
   $email =$_POST['email'];
   
   $message =$_POST['message'];
   
   $sql = "INSERT INTO `contact` ( `F_name`, `E_mail`, `Message`, `Dt`) VALUES ( '$name', '$email', '$message', current_timestamp());;";
//  echo $sql;
    $result=mysqli_query($conn,$sql);
   if($result){
   
    $showAlert = true;
    
   header('location:contact_us.php');
   
   }else{
   
   
    $showError = "your response has nat be recorded.";
    
    
   }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Stylecontact.css">
    <title>Contact Us</title>
</head>

<body>
    <section class="contact" id="sec">
        <header>
            <a href="index.php" class="logo">Rky Life Care</a>
            <div id="toggle" onclick="toggle()"></div>

        </header>
        <?php
        if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
        <div class="content">
         
            <h2>Contact Us</h2>
            <p>
                Fill the Form For Book an Appointment
            </p>
        </div>
        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                        <ion-icon name="location-outline"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>Address</h3>
                        <p>Nishi Plaza, 90 Feet Main Road Bypass Road Cahuraha,<br>East Indira Nagar, Near Aditya Vision<br>Patna, Bihar-800020</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>Phone</h3>
                        <p>9341231832</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>rkylifecare@hotmail.com</p>
                    </div>
                </div>
            </div>

            <div class="contactForm">
                <form action="contact_us.php" method="post">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="fname" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                    <textarea  name="message"required="required"></textarea>
                    <span>Type your Message..</span>
                </div>
                    <div class="inputBox">
                        <input type="Submit"name="submit" value="Send">
                    </div>
                </form>
            </div>
        </div>
    </section>
    <div id="navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="About_us.php">About Us</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
            <li><a href="Services.php">Services</a></li>
        </ul>
    </div>
    <script type="text/javascript">
        function toggle() {
            var sec = document.getElementById('sec');
            var nav = document.getElementById('navigation');
            sec.classList.toggle('active')
            nav.classList.toggle('active')
        }
    </script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>