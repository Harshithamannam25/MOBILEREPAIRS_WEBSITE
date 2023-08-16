<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width, initial-scale=1.0">
        <title>MOBILE DOORSTEP REPAIR</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?
        family=Poppins:wght@100;200;300;400;600;7000&disaplay=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-
        awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <section class="sub-header">
        <nav>
            <a href="index.php"><img src="logo.png">
            </a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="services.php">SERVICES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>OUR SERVICES</h1>
    </section>

    <section class="service">
        <h1>SERVICES WE OFFER</h1>
        <P>screen damages, battery, charging jack, speaker. Back panel problems </P>
    
        <div class ="row">
            <div class ="service-col">
                <h3>SCREEN DAMAGES</h3>
                <P>screen damages will be repaired and LCD screen are available which comes at low cost without the fingerprint sensors.</P>
            </div>
            <div class ="service-col">
                <h3>BATTERY AND SPEAKER</h3>
                <P>Battery problems related to any kinds of mobiles will be either repaired or replaced,same goes with the issues of the speakers also.</P>
            </div>
            <div class ="service-col">
                <h3>CAMERA </h3>
                <P>any services related camera issues will be resolved, we also provide high pixeled cameras for the mobiles. </P>
            </div>
        </div>
    </section>


    <section class="brands">
        <h1>Brands we repair</h1>
        
        <div class="row">
            <div class="brands-col">
                <img src="apple.png">
            </div>
            
            <div class="brands-col">
                <img src="samsung.png">
            </div>
    
            <div class="brands-col">
                <img src="motorola.png">
            </div>
    
            <div class="brands-col">
                <img src="oneplus.png">
            </div>
    
            <div class="brands-col">
                <img src="vivo.png">
            </div>
    
        </div>
    </section>


    <section class="footer">
        <div class="title-text">
            <h1>CONTACT</h1>
            <p>Can also visit our stores</p>
        </div>
    </section>


    <script>
        var navLinks = document.getElementById("navLinks");

        function showMenu(){
            navLinks.style.right = "0";
        }
        function hideMenu(){
            navLinks.style.right = "-200px";
        }
    </script>
    </body>
</html>