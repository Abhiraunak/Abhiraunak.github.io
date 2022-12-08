<?php
include "conection.php";
error_reporting($level=NULL);
   if(isset($_POST['submit'])){
   
   $name =$_POST['name'];
   $email =$_POST['email'];
   $subject =$_POST['subject'];
   $contact =$_POST['contact'];
   $describ =$_POST['describ'];
   
   $sql = "INSERT INTO `appoint` ( `Name`, `Email`, `Subject`, `Contact`, `Describ`, `Dt`) VALUES ('$name', '$email', '$subject', '$contact', '$describ', current_timestamp());;";
//  echo $sql;
    $result=mysqli_query($conn,$sql);
   if($result){
   
    $showAlert = true;
    
   header('location:appointment.php');
   
   }else{
   
   
    $showError = "your response has nat be recorded.";
    
    
   }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Form</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="Apoit_style.css">
</head>
<body>
<section class="banner" id="sec">
        <header>
            <a href="#" class="logo">Rky Life Care</a>
            <div id="toggle" onclick="toggle()" ></div>
        </header>
        <div class="container">
        <h1>GET IN TOUCH</h1>
        <p>Have any questions or suggestions? Drop us a message</p>
        <form action="appointment.php"method="post">
            <div class="row">
                <div class="column">
                    <label for="name">Name</label>
                    <input type="text" id="name"name="name" placeholder="Your name here">
                </div>
                <div class="column">
                    <label for="email">Email</label>
                    <input type="email" id="email"name="email" placeholder="Your email here">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject"name="subject" placeholder="Your subject here">
                </div>
                <div class="column">
                    <label for="contact">Contact Number</label>
                    <input type="tel" id="contact"name="contact" placeholder="Your phone number here">
                </div>
            </div>
            <div class="row">
                <div class="column">
                    <label for="issue">Describe your issue</label>
                    <textarea id="issue"name="describ" placeholder="Describe your issue in detail here" rows="3"></textarea>
                </div>
            </div>
            <button name="submit">Submit</button>
        </form>
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
        function toggle(){
            var sec = document.getElementById('sec');
            var nav = document.getElementById('navigation');
            sec.classList.toggle('active')
            nav.classList.toggle('active')
        }

    </script>
</body>
</html>