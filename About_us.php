<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About Us </title>
  <link rel="stylesheet" href="Style_abtu.css">
</head>
<body>
    <section class="banner" id="sec">
    <header>
        <a href="index.php" class="logo">Rky Life Care</a>
        <div id="toggle" onclick="toggle()" ></div>
    </header>
    <section class="about-us">
        <div class="about">
          <img src="Sr1.png" class="pic">
          <div class="text">
            <h2>About Us</h2>
              <p>RKY Life Care Hospital A Super Specialty Hospital Is One Of The Best Hospitals In Patna With Serene Ambience,
                 Spacious Interiors, Advanced Medical Facilities, And Best Doctors, 
                 Has Always Strived To Achieve The Best Clinical Outcomes. In Our Constant Endeavour To Create A World-Class Patient-Centric Hospital, 
                We Have Secured Our Position As One Of The Best Multi Super Specialty Hospitals In Patna.</p>
              <button onclick="location.href = 'contact_us.php';" id="Button" class="button" >
                <span class="button_lg">
                    <span class="button_sl"></span>
                    <span class="button_text">Book Appointment</span>
                </span>
            </button>
          </div>
        </div>
      </section>
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