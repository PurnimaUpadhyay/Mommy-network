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
</head>

<body class="error-pg">
    <main class="cf">
        <nav class="navbar navbar-default navbar-left-fixed">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" id="hamburger">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="img/logo.jpg" class="img-repsonsive"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php#about-mome-network" rel="about-mome-network">
                        <span class="icon-span menu1">
                        </span>
                        <span class="menu-span">About The  <br/>Mommy Network</span></a></li>
                        <li><a href="index.php#popup-2017" rel="popup-2017"><span class="icon-span menu2">
                        </span><span class="menu-span">The Mommy Network Popup</span></a></li>
                        <li><a href="index.php#part-brands" rel="part-brands"><span class="icon-span menu3">
                        </span><span class="menu-span">Participating Brands</span></a></li>
                        <li><a href="index.php#patners" rel="patners"><span class="icon-span menu4">
                        </span><span class="menu-span">Our Partners</span></a></li>
                        <li><a href="index.php#quiz" rel="quiz"><span class="icon-span menu5">
                        </span><span class="menu-span">Take the Quiz</span></a></li>
                        <li><a href="index.php#testimonials" rel="testimonials"><span class="icon-span menu6">
                        </span><span class="menu-span">Testimonials</span></a></li>
                        <li><a href="index.php#say-hello" rel="say-hello"><span class="icon-span menu7">
                        </span><span class="menu-span">Say hello</span></a></li>
                    </ul>
                </div>
                <a href="contest.php">
                    <div class="lucky">
                        <span class="icon-star menu8"></span>
                        <span class="lucky-span">Register!</span></div>
                </a>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- Main jumbotron for a primary marketing message or call to action -->
        <div class="container-fluid main-container error-main">
            <!-- Example row of columns -->
            <div class="body-content">
                <?php

                 $mysqli = new mysqli('localhost', 'vikrant1989', 'admin@123','momi1');

                 // $mysqli = new mysqli('localhost', 'root', '','momi');

                 date_default_timezone_set('Asia/Kolkata');
                        $date= date('Y-m-d H:i:s') ;
                        // echo $date;

                   $messageToView = 'Thank you';

                if (isset($_POST['sayhell'])) {
                    $lname = $contact = $email = $message = "";
                    
                    if (isset($_POST['lname'])) {
                        $lname = trim($_POST['lname']);
                        $contact = trim($_POST['contact']);
                        $email = trim($_POST['email']);                        
                        $message = trim($_POST['message']);
                        $query_string2 = "INSERT INTO `contact` (  `cname`,`cphone`,`cemail`, `cmessage`, `created_at` ) VALUES ( '".$lname."','".$contact."','".$email."','".$message."', '".$date."')";



                        if ($mysqli->query($query_string2) == TRUE) {
                            // echo "Say Hellos2";
                            
                            $messageToView = 'Hey there! We have received your details and someone from our team will get back to you soon.';
                          }
                      }

                  }

                if (isset($_POST['contest_form'])) {
                    $fname = $fphone = $email = $age = "";
                    if (isset($_POST['email'])) {
                        $fname = trim($_POST['fname']);
                        $fphone = trim($_POST['fphone']);
                        $email = trim($_POST['email']);
                        $age = trim($_POST['age']);
                        $type_of_mom = trim($_POST['result']);
                        $query_string = "INSERT INTO `contest` (  `fname`,`fphone`,`email`, `age`, `type_of_mom`, `created_at` ) VALUES ( '".$fname."','".$fphone."','".$email."','".$age."','".$type_of_mom."', '".$date."')";

                        if ($mysqli->query($query_string) == TRUE) {
                            // echo "Contest Form";
                            $messageToView = 'Congratulations Mommy! We have got your name registered for the \'Lucky Draw Contest\'. Keep your fingers crossed!';
                          }
                      }

                  }

                  if (isset($_POST['subscribe'])) {


                    
                    if (isset($_POST['email'])) {

                        $email = trim($_POST['email']);
                        $query_string = "INSERT INTO `subscribe` ( `email_id`,`created_at`) VALUES ( '".$email."', '".$date."')";



                        if ($mysqli->query($query_string) == TRUE) {
                            
                            // echo "Contest Form";
                            $messageToView = 'Congratulations, you have signed up for an exciting journey with The Mommy Network. Our team will update you about the events from time to time.';
                          }
                      }

                  }
                 ?>
                <div class="main-wrap">
                <div class="main-inner">
                    <div class="thankyoupage">
                        <img src="img/thanku.png" type="image/svg+xml" />
                        <p><?php echo $messageToView; ?></p>
                        <a href="index.php">GO BACK TO HOMEPAGE</a>
                    </div>
                    </div></div>
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