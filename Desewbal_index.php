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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Optional JavaScript -->

    <link rel="stylesheet" href="css/style1.css">
    
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-light navbar-expand-lg fixed-top">
        <a href="#" class="navbar-brand">InsightSKV</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto">
                <li clas="navbar-item">
                    <a href="#" class="nav-link">Services</a>
                </li>
                <li clas="navbar-item">
                    <a href="#" class="nav-link">Blog</a>
                </li>
                <li clas="navbar-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li clas="navbar-item">
                    <a href="login.php" class="nav-link">Admin Panel</a>
                </li>
                <li clas="navbar-item">
                    <a href="#" class="nav-link">Panel list</a>
                </li>
                <li clas="navbar-item">
                    <a href="login.php" class="nav-link">login</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="data">
                    Online Surveys
                </h2>

            </div>
            <div class="col-md-12">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="last">
                    <img src="future-pacing-mirror-man-success-confidence.jpg">

                    <div class="description">
                        <p>Occupation</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="last">
                    <img src="image/fina.webp">

                    <div class="description">
                        <p>Finance</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="last">
                    <img src="image/lifestyle.jpg">

                    <div class="description">
                        <p>Lifestyle</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="last">
                    <img src="image/Gadgets & Technology.jpg">

                    <div class="description">
                        <p>Gadgets & Technology</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="last">
                    <img src="image/healthcare.png" class="img-fluid">

                    <div class="description">
                        <p>Health</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="last">
                    <img src="image/Parenting.jpg" class="img-fluid">

                    <div class="description">
                        <p>Parenting</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <figure>
                    <img src="im/1.png" class="img-fluid" alt="Occupation">
                    <div class="content">
                    <figcaption>
                        <h4>Occupation</h4>
                        <!-- <p>Share your experience with office products and/or services; Participate in b2b research
                            surveys.</p> -->
                    </figcaption>
                </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure>
                    <img src="im/6.png" class="img-fluid" alt="Occupation">
                    <div class="content">
                        <figcaption>
                            <h4>Finance</h4>
                            <!-- <p>Share your experience with office products and/or services; Participate in b2b research
                                surveys.</p> -->
                        </figcaption>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure>
                    <img src="im/4.png" class="img-fluid" alt="Occupation">
                    <div class="content">
                        <figcaption>
                            <h4>Lifestyle</h4>
                            <!-- <p>Share your experience with office products and/or services; Participate in b2b research
                                surveys.</p> -->
                        </figcaption>
                    </div>
                </figure>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <figure>
                    <img src="im/5.png" class="img-fluid" alt="Occupation">
                    <div class="content">
                    <figcaption>
                        <h4>Gadgets & Technology</h4>
                        <!-- <p>Share your experience with office products and/or services; Participate in b2b research
                            surveys.</p> -->
                    </figcaption>
                </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure>
                    <img src="im/3.png" class="img-fluid" alt="Occupation">
                    <div class="content">
                        <figcaption>
                            <h4>Health</h4>
                            <!-- <p>Share your experience with office products and/or services; Participate in b2b research
                                surveys.</p> -->
                        </figcaption>
                    </div>
                </figure>
            </div>
            <div class="col-md-4 col-sm-12">
                <figure>
                    <img src="im/2.png" class="img-fluid" alt="Occupation">
                    <div class="content">
                        <figcaption>
                            <h4>Parenting</h4>
                            <!-- <p>Share your experience with office products and/or services; Participate in b2b research
                                surveys.</p> -->
                        </figcaption>
                    </div>
                </figure>
            </div>
        </div>
    </div>
</body>

</html>