<!DOCTYPE html>
<html lang="en">

<head>
    <title>About Karen Quiroz</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/forms.css" />
    <!-- jQuary-->
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <!-- Menu Maker Plugin -->
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>


    <script src="js/script.js"></script>
</head>

<body>
    <main>
        <header>
            <div class="logo-box">
                <h1><a href="template.html"> KQ </a></h1>
            </div>

            <nav id="cssmenu">
                <ul>
                    <li><a href="#"> Language </a>
                        <ul>
                            <li><a href="#"> English </a></li>
                            <li><a href="es-contact.php"> Español </a></li>
                        </ul>
                    <li><a href="template.html"> About Me </a></li>
                    <li><a href="services.html"> Services </a></li>
                    <li><a href="gallery.html"> Gallery </a></li>
                    <li><a href="contact.php"> Contact </a></li>
                </ul>
            </nav>
        </header>
        <div class="subheader-box">
        <h2 class="subheader page">Contact Karen</h2>
        </div>
     <!-- START Contact Form -->
     <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */
    
        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "jimenez.isaac.jr@gmail.com";  //place your/your client's email address here
        $toName = "Isaac"; //place your client's name here
        $website = "Contact Form Test";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	   ?>
     <!-- End Contact Form -->
     <footer>
            <div class="flex-container4">
                <div class="footer-link">
                    <p class="social"> Follow </p>

                    <div class="link">
                        <a href="https://www.instagram.com/quirozknows/" title="Link to Instagram" target="_blank"> <img
                                src="images/icon-instagram.png" alt="instagram icon"></a>
                        <a href="https://www.youtube.com/channel/UC_6OMebKUkacYCnlb6rq5IQ" title="Link to Youtube"
                            target="_blank"> <img src="images/icon-youtube.png" alt="Youtube icon"> </a>
                    </div>

                </div>
                <div class="footer-link">
                    <p class="contact"><a href="contact.php"> Contact </a></p>
                </div>
                <div class="footer-link">
                    <p class="copyright"><small>&copy; 2021 by <a href="contact.php">Isaac Jimenez,<br></a> All Rights
                            Reserved<br> ~ <a href="https://validator.w3.org/check/referer" target="_blank">Valid
                                HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer"
                                target="_blank">Valid
                                CSS</a><br><a href="disclaimer.html">Disclaimer</a></small></p>
                                
                </div>
            </div>
        </footer>

</body>

</html>