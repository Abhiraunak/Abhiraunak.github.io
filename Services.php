<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style_ser.css">
   
    <title>Services</title>
</head>
<body>
    <section class="banner" id="sec">
        <header>
            <a href="index.php" class="logo">Rky Life Care</a>
            <div id="toggle" onclick="toggle()" ></div>

        </header>
        
        <div class="container2">
            <div class="card">
                <div class="imgbx">
                    <img src="Sr1.png">
                </div>
                <div class="content">
                    <h2>Emergency</h2>
                    <p>We provide the emergency services 24X7. As we have best in class Doctors team available
                        at the moment and we handle the emergency as soon as possible. 
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="Sr2.png">
                </div>
                <div class="content">
                    <h2>Srvice 2</h2>
                    <p>At RKY Health Care, you are so much more than just a patient. 
                        We have designed our patient rooms with an aim to take care of medical needs, 
                        maximise comfort, and accommodate personal requirements for recovery. 
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="imgbx">
                    <img src="Sr2.png">
                </div>
                <div class="content">
                    <h2>Service 3</h2>
                    <p>At RKY Health Care, you are so much more than just a patient. 
                        We have designed our patient rooms with an aim to take care of medical needs, 
                        maximise comfort, and accommodate personal requirements for recovery.
                    </p>
                </div>
    
            </div>
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
        function toggle(){
            var sec = document.getElementById('sec');
            var nav = document.getElementById('navigation');
            sec.classList.toggle('active')
            nav.classList.toggle('active')
        }

    </script>
</body>
</html>