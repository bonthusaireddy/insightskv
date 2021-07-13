<!DOCTYPE html>
<html lang="en">
<?php 
    if (isset($_GET['logout']) && $_GET['logout'] == 1){  
        session_start();
        session_unset();
        session_destroy();
    } 
?>

<head>
    <title>Insightskv</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">


    <!-- Pace.js -->
    <script src="HomePage_Style_js_Img/js/pace.js" type="text/javascript"> </script>

    <!-- Foundations 5 Stylesheet-->
    <link href="HomePage_Style_js_Img/css/foundation.css" type="text/css" rel="stylesheet" media="screen" />

    <!-- Normalize-->
    <link href="HomePage_Style_js_Img/css/normalize.css" type="text/css" rel="stylesheet" media="screen" />

    <!-- Source Sans Pro Google Web Font-->
    <link
        href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,400italic,600italic,700italic&subset=latin,vietnamese,latin-ext'
        rel='stylesheet' type='text/css'>

    <!-- Font Awesome Web Font Icons-->
    <link href="HomePage_Style_js_Img/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen" />

    <!-- General Stylesheet-->
    <link href="HomePage_Style_js_Img/css/style.css" type="text/css" rel="stylesheet" media="screen" />

    <!-- jQuery Library 1.11.0 -->
    <script type="text/javascript" src="HomePage_Style_js_Img/js/jquery-1.11.0.min.js"> </script>

    <!-- Modernizr v2.7.1 -->
    <script src="HomePage_Style_js_Img/js/modernizr.js" type="text/javascript"> </script>

    <!-- Foundations 5 -->
    <script src="HomePage_Style_js_Img/js/foundation.min.js" type="text/javascript"> </script>

    <!-- Caroufredsel jQuery Plugin -->
    <script src="HomePage_Style_js_Img/js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"> </script>

    <!-- Isotope jQuery Plugin -->
    <script src="HomePage_Style_js_Img/js/jquery.isotope.js" type="text/javascript"> </script>

    <!-- Appear Plugin -->
    <script src="HomePage_Style_js_Img/js/appear.js" type="text/javascript"> </script>

    <!-- General Initialization -->
    <script src="HomePage_Style_js_Img/js/general.js" type="text/javascript"> </script>

</head>

<body id="home">

    <!-- Back to Top Button -->
    <a href="#home" class="scroll backtotop">
        <i class="fa fa-angle-up"> </i>
    </a>

    <!-- Start of Header -->
    <header>
        <div class="row">
            <div class="large-4 medium-12 column">
                <div class="logoholder">
                    <a href="#home" class="scroll"><img src="HomePage_Style_js_Img/images/logo.png" alt="" title=""></a>
                    <h1 class="head-1" style=" font-size: small;">Insightskv</h1>
                </div>
            </div>
            <div class="large-8 medium-12 column">
                <nav>
                    <ul>
                        <li><a href="#home" class="scroll">Services</a></li>
                        <li>/</li>
                        <li><a href="#about" class="scroll">Blog</a></li>
                        <li>/</li>
                        <li><a href="#services" class="scroll">About</a></li>
                        <li>/</li>
                        <li><a href="login.php" class="nav-link">Admin Panel</a></li>
                        <li>/</li>
                        <li><a href="#works" class="scroll">Panel List</a></li>
                        <li>/</li>
                        <li><a href="login.php" class="nav-link">Login</a></li>
                    </ul>
                </nav>
            </div>

            <div class="large-12 column">
                <div class="sep"> </div>
            </div>

        </div>
    </header>
    <!-- End of Header -->

    <!-- Start of About -->
    <section class="about" id="about">
        <div class="row">

            <div class="large-8 large-centered column">
                <div class="title">
                    <h1>Online Surveys</h1>
                    <span>...</span>
                    <p>Text<br />Text</p>
                </div>
            </div>

            <div class="large-4 hide-for-medium-only hide-for-small-only column start">
                <div class="imageholder">
                    <img src="HomePage_Style_js_Img/images/5.png" alt="Green Path Way" title="Green Path Way">
                    <div class="text">
                        <div><span>Quality Craftsmanship</span></div>
                    </div>
                </div>
            </div>

            <div class="large-8 medium-9 large-uncentered medium-centered small-centered column">
                <div class="sliderHolder">
                    <div class="slider">
                        <div class="slide"><img src="HomePage_Style_js_Img/images/glassesoncomputer.jpg"
                                alt="Glasses on Computer" title="Glasses on Computer" class="item"></div>
                        <div class="slide"><img src="HomePage_Style_js_Img/images/macontable.jpg"
                                alt="Glasses on Computer" title="Glasses on Computer" class="item"></div>
                    </div>
                    <div class="bannerNav">
                        <a href="#" class="prev"> <i class="fa fa-angle-left"> </i></a>
                        <a href="#" class="next"> <i class="fa fa-angle-right"> </i></a>
                    </div>
                </div>
            </div>

            <div class="large-6 medium-6 column">
                <article>
                    <div class="smallTitle">
                        <h2>ABOUT US</h2>
                        <span>...</span>
                    </div>
                    <p>
                        Soul is a Web and User Interface Design studio based in the sunny island of Malta, focusing on
                        innovation and new technologies.
                        <br /><br />
                        We are a nimble team of designers and developers that have been creating solutions for the web
                        for quite a while, but that doesn't really matter much to us. We simply thrive to never stop
                        learning whilst focus on building digital experiences that people love.
                    </p>
                    <a href="#" class="cta">GET STARTED</a>
                </article>
            </div>

            <div class="large-6 medium-6 column">
                <article>
                    <div class="smallTitle">
                        <h2>OUR PHILOSOPHY</h2>
                        <span>...</span>
                    </div>
                    <p>
                        At Soul we are driven by the idea of quality craftsmanship in all that we do, each pixel
                        refined, each line of code considered. Having a small structure but best in market knowledge, we
                        deliver competitive internet services balancing creativity, innovation and business
                        understanding.
                        <br /><br />
                        We are obsessed with beautiful digital experiences, putting the user at the centre of everything
                        we make. Creativity starts with understanding the context of the design challenge and only then
                        can one deliver an exceptional graphical experience.
                    </p>
                </article>
            </div>

        </div>
    </section>
    <!-- End of About -->

    <div class="main1">
        <div class="ul1">
            <div class="floating">
                <div class="img-1">
                    <img src="./HomePage_Style_js_Img/images/mrjackdaniel.jpg" alt="">
                    <div class="heading">
                        <h1>market</h1>
                    </div>

                </div>
            </div>
            <div class="img-1">
                <img src="./HomePage_Style_js_Img/images/mrjackdaniel.jpg" alt="">
                <div class="heading">
                    <h1>market</h1>
                </div>
            </div>
            <div class="img-1">
                <img src="./HomePage_Style_js_Img/images/mrjackdaniel.jpg" alt="">
                <div class="heading">
                    <h1>market</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <p class="header">Image Hover Effects</p>
        <div class="content">
            <div class="wrapper">
                <div class="box vintage">
                    <img src="./HomePage_Style_js_Img/images/1.png" alt="EMMYLOU">
                    <h2>EMMYLOU</h2>
                    <p>I'll be your Emmylou and I'll be your June</p>
                </div>
            </div>
            <div class="wrapper">
                <div class="box w-content">
                    <img src="./HomePage_Style_js_Img/images/2.png
    " alt="Jenny of Oldstones">
                    <div class="frame">
                        <h2>Jenny of Oldstones</h2>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="box postcard">
                    <img src="./HomePage_Style_js_Img/images/3.png" alt="BOX">
                    <h2>The Pursuit of <p class="hide">HAPPINESS</p>
                    </h2>
                </div>
            </div>
            <div class="wrapper">
                <div class="box zoom-in">
                    <img src="./HomePage_Style_js_Img/images/4.png" alt="Postcards From Italy">
                    <h2>Postcards From Italy</h2>
                    <p>And I will love to see that day</p>
                </div>
            </div>
            <div class="wrapper">
                <div class="box blury-card">
                    <img src="./HomePage_Style_js_Img/images/5.png " alt="Blue Ridge Mountains">
                    <div class="frame">
                        <h2>Blue Ridge</h2>
                        <p>MOUNTAINS</p>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="box zoom-out">
                    <img src="./HomePage_Style_js_Img/images/6.png " alt="Melody Noir">
                    <div class="frame">
                        <h2>MELODY <span>NOIR</span></h2>
                        <p>Tell me where the wind is blowing 'cause that's where the music's going</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start of Footer -->
    <footer>
        <div class="row">
            <div class="large-6 medium-12 column">
                <ul class="social fa-ul">
                    <!-- <li><a href="#"><i class="fa fa-li fa-dribbble"> </i> <span>DRIBBLE<span></a></li>-->
                    <li><a href="#"><i class="fa fa-li fa-twitter"> </i> <span>TWITTER<span></a></li>
                    <li><a href="#"><i class="fa fa-li fa-skype"> </i> <span>SKYPE<span></a></li>
                </ul>
            </div>
            <div class="large-6 medium-12 column">
                <div class="copyright">
                    © Soul 2015. ALL RIGHTS RESERVED Create By <a href="#"> ....</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</body>

</html>