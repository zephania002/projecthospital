<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, 
  initial-scale=1.0">
  <title>My Web Page</title>
  <link rel="stylesheet" href="service.css"> 
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body>
    <div class="top-bar">
        <span><ion-icon name="call-outline"></ion-icon> +254 759 547 761</span>
        <ul>
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-google"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-skype"></ion-icon></a></li>
        </ul>
    </div>
    <nav>
        <div class="logo">
       <a href="#"><img src="logo.png" alt="logo"></a> 
    </div>
        <div class="toggle">
        <a href="#"><ion-icon name="menu-outline"></ion-icon></a>
    </div>
        <ul class="menu">
            <li><a href="/home/home.html">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="/services/service.html">Services</a></li>
            <li><a href="">Logs</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(function(){
        $(".toggle").on("click",function(){
            if($(".menu").hasClass("active")){
                $(".menu").removeClass("active");
                $(this).find("a").html("<ion-icon name='menu-outline'></ion-icon>");
                } else{
                    $(".menu").addClass("active");
                    $(this).find("a").html("<ion-icon name='close-outline'></ion-icon>");
                }
            });
        });
</script>
    <audio autoplay loop controls>
        <source src="/home/audio.mp3" type="audio/mp3">
        Your browser does not support the audio tag.
      </audio>
    <video autoplay loop  ="100%" height="100%" controls>
        <source src="/home/clip3.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>
    <div class="container">
        
        <h1><a href="/home/home.html"><ion-icon name="arrow-back-circle-sharp"></ion-icon></a>  Our Services</h1>
        <div class="row">
            <div class="service">
                <a href=""><ion-icon name="laptop-outline"></ion-icon></a>
                <h2>WELLNESS CHECKUP</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>
            <div class="service">
                <a href=""><ion-icon name="bar-chart-outline"></ion-icon></a>
                <h2>INPATIENT</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="bug-outline"></ion-icon></a>
                <h2>OUTPATIENT</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="analytics-outline"></ion-icon></a>
                <h2>MATERNITY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="logo-apple"></ion-icon></a>
                <h2>DIAGNOSTIC IMAGING</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="key-outline"></ion-icon></a>
                <h2>SURGERY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="logo-paypal"></ion-icon></a>
                <h2>PHARMACY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="git-network-outline"></ion-icon></a>
                <h2>ENDOSCOPY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>
        </div>
    
   <div class="row">
            <div class="service">
                <a href=""><ion-icon name="laptop-outline"></ion-icon></a>
                <h2>X-RAY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>
            <div class="service">
                <a href=""><ion-icon name="bar-chart-outline"></ion-icon></a>
                <h2>DENTISTRY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="bug-outline"></ion-icon></a>
                <h2>DERMATOLOGY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="analytics-outline"></ion-icon></a>
                <h2>NEUROLOGY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="logo-apple"></ion-icon></a>
                <h2>OBSTETRICS</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="key-outline"></ion-icon></a>
                <h2>CARDIOLOGY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="logo-paypal"></ion-icon></a>
                <h2>BLOOD SERVICES</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="git-network-outline"></ion-icon></a>
                <h2>EMAERENCY ROOM SERVICES</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>
            <div class="service">
                <a href=""><ion-icon name="logo-paypal"></ion-icon></a>
                <h2>GYNECOLOGY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>
            <div class="service">
                <a href=""><ion-icon name="logo-paypal"></ion-icon></a>
                <h2>SHORT-TERM HOSPITALIZATION</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>
        </div>

    <div class="container">
        <h1>FACILITIES</h1>
        <div class="row">
            <div class="service">
                <a href=""><ion-icon name="laptop-outline"></ion-icon></a>
                <h2>PHARMACY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>
            <div class="service">
                <a href=""><ion-icon name="bar-chart-outline"></ion-icon></a>
                <h2>OPERATION THEATRE</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="bug-outline"></ion-icon></a>
                <h2>DAY SURGERY UNIT</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="analytics-outline"></ion-icon></a>
                <h2>IMAGING</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="logo-apple"></ion-icon></a>
                <h2>RADIOLOGY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="key-outline"></ion-icon></a>
                <h2>PHYSIOTHERAPY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="logo-paypal"></ion-icon></a>
                <h2>LABORATORY</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>

            <div class="service">
                <a href=""><ion-icon name="git-network-outline"></ion-icon></a>
                <h2>WARDS</h2>
                <p>Learn How To Make Responsive Ssservices Section on Website Using HTML and CS</p>
            </div>
        </div>
    </div>

</body>
</html>