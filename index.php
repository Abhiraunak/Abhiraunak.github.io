<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    
    <title>Rky Life care</title>
</head>

<body>
    <section class="banner" id="sec">
        <header>
            <a href="#" class="logo">Rky Life Care</a>
            <div id="toggle" onclick="toggle()" ></div>
        </header>
        <div class="content">
            <h2>We Take <span>Care of</span> Your health</h2>
            <p>
                At RKY Health Care, you are so much more than just a patient.</p>
               <p>We take care of medical needs,maximise comfort, 
                and</p>
               <p>accommodate personal requirements for recovery.</p> 
                <button onclick="location.href = 'appointment.php';" id="Button" class="button" >
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Book Appointment</span>
                </span>
            </button>
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