<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>The Mommy Network</title>
    <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="img/fav.png" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <?php include_once("analyticstracking.php"); ?>
<style type="text/css">
    @media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
     
    }
</style>
</head>

<body class="quiz">
    <main class="cf jf">
        <?php include 'menu.html'; ?>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="container-fluid main-container">
            <!-- Example row of columns -->

            <div class="body-content">
                <div class="outter">
                    <div class="inner">
                        <div class="quiz-contest">

                        <div class="contest-form">
                            <h1>Fill In Your Details</h1>
                            <div class="row">
                                <form  action="thank-you.php" method="POST" id="contact">
                                    <div class="col-md-6">
                                        <input type="text" name="fname" class="textonly"  placeholder="Your Name*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="fphone" class="numberinpute"  maxlength="15" placeholder="+91 Your Phone Number*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="email" name="email"  placeholder="Your Email Address*">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="age" class="numberinpute"  maxlength="2" placeholder="Your Child's Age*">
                                        <input type="hidden" name="contest_form" value="true">
                                        <?php if (isset($_GET['rsult'])): ?>
                                        <input type="hidden" name="result" value="<?php echo $_GET['rsult']; ?>">    
                                        <?php endif ?>
                                        

                                    </div>
                                    <div class="col-md-12">
                                     <div class="captcha-block">
                                        <div class="g-recaptcha" data-sitekey="6LeFkywUAAAAAPF_KSqBXhN3e_F9MD9lMMhoUKb8"></div>
                                        <input type="hidden" class="hiddenRecaptcha required" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                    </div>
                                    <div class="col-md-12">
                                        <button >REGISTER NOW</button>                                   
                                    </div>
                                        
                                        
                                    </div>
                                </form>
                            </div>
                        </div>


                    
                        </div> <!-- quiz-content -->
                    </div> <!-- inner -->
                </div> <!-- outter -->
                
            </div>

            
          
        </div>
    </main>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-2">
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <p>All Rights Reserved &copy; The Mommy Network</p>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 social-box">
                        <a href="https://www.facebook.com/tmnindia/" target="_blank" class="social-media"><span class="facebook">
                        </span></a>
                        <a href="
                        https://www.instagram.com/mommynetwork/?hl=en" target="_blank" class="social-media"><span class="inst">
                        </span></a>
                        <!-- <a href="#" target="_blank" class="social-media">  <span class="twitter">
                        </span></a> -->
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4">
                        <p class="crafted">Crafted By <a href="https://www.togglehead.in/" target="_blank" class="togglehead">Togglehead</a></p>
                    </div>
                    <div>
                    </div>
                </div>
    </footer>
    <!-- /container -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
    </script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="js/validation.js"></script>

    <script src="js/main.js"></script>

</body>

</html>