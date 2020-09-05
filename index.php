<?php
include 'config.php';
$servername = $config['DB_HOST'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
$dbname = 'arthaklk_scoreboard';

$conn = mysqli_connect($servername , $username ,$password ,$dbname);

 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Arthanomics</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/index.css">
   

    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php" style="margin-right: 3px;"><img
                    src="assets/img/LOGO%20WITHOUT%20NAME%20.png" style="opacity: 1;width: 60px;height: 50px;"></a>
            <div><img src="assets/img/Top%20(1).png" style="width: 170px;height: 18px20px;"></div><button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="events.html">events</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="collaborations.html">Collaborations</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="faq.html">faq</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Scores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
<!-- Button trigger modal -->
<button type="button" id="popbtn"style="visibility:hidden"class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
  Launch static backdrop modal
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="text-align:center">Sponsor 2020</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
      <div class="modal-body">
      <img src="/assets/img/ads/sp.png" style="display:block!important"class="img-fluid"  />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        <section class="clean-block clean-hero showcase">
            <div class="video-container">
                <video autoplay loop id="video-background" src="/video.mp4"></video>
            </div>
            <div class="head-t" style="z-index: 2; color: white;">
                <p class="jai" style="text-transform: uppercase;"><i> Jai Hind College presents
                    </i> </p>
                <h1 class="main-heading">ARTHANOMICS </h1>
                <p class="sub-heading" style="text-transform: uppercase;"> India's first online business & economics
                    festival
                    <br>
                    <b>14th, 15th & 16th August, 2020 </b> </p>
                <!--<span class="element"></span>!-->
                <button id="m-btn" type="button" style="visibility: hidden;"><a href="registration.html"
                        style="text-decoration: none; color: black;">Register</a> </button>
            </div>
        </section>

        <section class="clean-block clean-info dark">
            <marquee class="li" direction=”right” onmouseover="stop()" onmouseout="start()">
            We hope you had a good time at Arthanomics 2020, see you next year!</marquee>
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="carousel slide" data-ride="carousel" id="carousel-1">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active"><img class="w-100 d-block"
                                        src="assets/img/about us final 4.png" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block"
                                        src="assets/img/about us final.png" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block"
                                        src="assets/img/about us final 3.png" alt="Slide Image"></div>
                                <div class="carousel-item "><img class="w-100 d-block"
                                        src="assets/img/about us final 2.png" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block"
                                        src="assets/img/about us final 5.png" alt="Slide Image"></div>
                                <div class="carousel-item"><img class="w-100 d-block"
                                        src="assets/img/about us final 6.png" alt="Slide Image"></div>
                            </div>

                            <div>
                                <!-- Start: Previous --><a class="carousel-control-prev" href="#carousel-1"
                                    role="button" data-slide="prev"><span
                                        class="carousel-control-prev-icon"></span><span
                                        class="sr-only">Previous</span></a>
                                <!-- End: Previous -->
                                <!-- Start: Next --><a class="carousel-control-next" href="#carousel-1" role="button"
                                    data-slide="next"><span class="carousel-control-next-icon"></span><span
                                        class="sr-only">Next</span></a>
                                <!-- End: Next -->
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 style="text-align: center;" class="ab">ABOUT</h3>
                        <div class="getting-started-info">
                            <p>Arthanomics 2020, the flagship endeavour of the Economics Department of Jai Hind College,
                                is an online unique platform for the inspired youth - where new ideas and bold action
                                meet, to tackle contemporary issues with creativity.
                                <br>
                                <br>
                                As the world around us changes today, Arthanomics too, gives the participants an
                                opportunity to voice their opinions and bring to the table, their interpretations and
                                ideas, through discussions, debates and an array of events.
                                <br>
                                <br>
                                In these challenging times, Arthanomics is actively striving to keep students
                                constructively engaged and is involved in enhancing their knowledge and skills in a fun
                                and competitive environment.

                                We believe that the youth has an unabashed ability to bring about a change and hence
                                aspire to harness and present to the world, the immense potential we possess.
                                <br></p>
                        </div><button id="ab-btn" class="btn btn-outline-primary btn-lg" type="button"><a
                                href="/about-us.html" class="abo">Know more</a></button>
                    </div>
                </div>
            </div>
        </section>
        

        
        <section class="clean-block features" style="height: min-content;">

            <div class="desk">
                <div style="position: absolute;    margin-top: 30px;" id="eve">
                    <div class="ev-grid">
                        <div class="f-half">
                            <div id="f11" class="eve-name">
                                Arthanomics Assembly
                                <img src="/assets/img/mevents/Arthanomics Assembly.png" width="130px">
                            </div>
                            <div id="f12" class="eve-name">
                                Case Conundrum
                                <img src="/assets/img/mevents/Case Conundrum.png" width="130px">
                            </div>
                            <div id="f13" class="eve-name">
                                Comic Catalysis
                                <img src="/assets/img/mevents/Comic Catalysis.png" width="130px">
                            </div>
                            <div id="f14" class="eve-name">
                                Doom and Destiny
                                <img src="/assets/img/mevents/Doom and Destiny.png" width="130px">
                            </div>

                            <div id="f15" class="eve-name">
                                Journalism in Jeopardy
                                <img src="/assets/img/mevents/Journalism in Jeopardy.png" width="130px">
                            </div>

                        </div>
                        <div class="mid">

                        </div>
                        <div class="s-half">
                            <div id="s11" class="eve-name">

                                <img src="/assets/img/mevents/Marketing Maestros.png" width="130px">
                                Marketing Maestros
                            </div>
                            <div id="s12" class="eve-name">

                                <img src="/assets/img/mevents/Policy Pandemonium.png" width="130px">
                                Policy Pandemonium
                            </div>
                            <div id="s13" class="eve-name">

                                <img src="/assets/img/mevents/Powerplay.png" width="130px">
                                Powerplay
                            </div>
                            <div id="s14" class="eve-name">

                                <img src="/assets/img/mevents/Stock it up.png" width="130px">
                                Stock it up
                            </div>

                            <div id="s15" class="eve-name">

                                <img src="/assets/img/mevents/The Snap Theory .png" width="130px">
                                The Snap Theory
                            </div>

                        </div>
                    </div>


                </div>
                <div style="position: relative ; display: block;" class="t-half">
                    <div style="text-align: center; color: white; font-size: 18px; ">
                        Tycoons of Tomorrow
                    </div>

                    <img id="t11" src="/assets/img/mevents/Tycoons of Tomorrow.png" width="130px">
                </div>
                <div style="position: relative;">
                    <!-- <img id="m1"filter= "invert(100)" src="/assets/img/mevents/Game On (5).png" width="350px">-->
                    <div id="eve-hide">
                        <button class="eve-head " href="/events.html"><a class="eve-link" href="events.html">EVENTS</a>
                        </button>
                    </div>
                    <div id="img1" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/6 (1).png">
                    </div>
                    <div id="img2" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/5.png">
                    </div>
                    <div id="img3" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/10.png">
                    </div>
                    <div id="img4" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/4 (1).png">
                    </div>
                    <div id="img5" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/9.png">
                    </div>
                    <div id="img6" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/8.png">
                    </div>
                    <div id="img7" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/7.png">
                    </div>
                    <div id="img8" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/1.png">
                    </div>
                    <div id="img9" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/2.png">
                    </div>
                    <div id="img10" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/11.png">
                    </div>
                    <div id="img11" style="display: none;">
                        <img class="center-pic" src="/assets/img/event-center/3.png">
                    </div>

                </div>

            </div>
            

            <h1 id="heve" style="text-align: center; color: white;">EVENTS </h1>
            <div class="mob" id="mob2">

                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Arthanomics Assembly.png">
                    <div>
                        Arthanomics Assembly
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Journalism in Jeopardy.png">

                    <div>
                        Journalism in Jeopardy
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Marketing Maestros.png">

                    <div>
                        Marketing Maestros
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Policy Pandemonium.png">

                    <div>
                        Policy Pandemonium
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Powerplay.png">

                    <div>
                        Powerplay
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Stock it up.png">

                    <div>
                        Stock it up
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/The Snap Theory .png">

                    <div>
                        The Snap Theory
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Tycoons of Tomorrow.png">

                    <div>
                        Tycoons of Tomorrow
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Doom and Destiny.png">

                    <div>
                        Doom and Destiny
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Case Conundrum.png">

                    <div>
                        Case Conundrum
                    </div>
                </div>
                <div class="mob-head">
                    <img class="mob-pic" src="/assets/img/mevents/Comic Catalysis.png">

                    <div>
                        Comic Catalysis
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div id="spons_lap" style="background:white">
                <div style="width:100%">
                    <img style="width:100%"src="/assets/img/spons_lap/1.png">
                </div>
                <div style="width:100%">
                    <img style="width:100%"src="/assets/img/spons_lap/2.png">
                </div>
            </div>
        </section>
        <section class="clean-block slider " style="background-color: white;">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">What We Offer</h2>

                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-screen-desktop icon"></i>
                        <h4>Unique online global platform</h4>
                        <p>All events, networking, interaction, and participation will be completely online, for
                            students to discuss and deliberate on contemporary issues and topics.</p>
                    </div>

                    <div class="col-md-5 feature-box"><i class="icon-globe icon"></i>
                        <h4>Connecting people globally</h4>
                        <p> With the ease of access provided by our online platform, participants from across the world
                            can join in at the same time. </p>
                    </div>

                    <div class="col-md-5 feature-box"><i class="icon-trophy icon"></i>
                        <h4>Attractive prizes worth up to ₹1 lakh</h4>
                        <p> For contingents, as well as for individual events, we have ₹1 lakh worth of prizes and
                            goodies up for grabs.</p>
                    </div>




                    <div class="col-md-5 feature-box"><i class="icon-people icon"></i>
                        <h4>Register with your friends</h4>
                        <p> Instead of only having colleges bring contingents, you can now form contingents with your
                            friends, irrespective of their educational institution, and be eligible for amazing prizes!
                        </p>
                    </div>

                    <div class="col-md-5 feature-box"><i class="icon-calendar icon
"></i>
                        <h4>Exciting wide new range of events</h4>
                        <p>By expanding our scope beyond just business and economics, our events now include
                            opportunities to explore your creative and artistic side as well. </p>
                    </div>


                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Enhance your soft skills</h4>
                        <p>The events at Arthanomics are crafted intricately designed so as to foster the soft skills of
                            young minds that participate in the programme. </p>
                    </div>


                </div>
            </div>
        </section>

        <section class=" clean-block add-on social-icons blue " style="display: block;">
            <div class="footer  row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-12">
                            <div class="first">
                                <h4>Address<i class="icon-location-pin"></i></h4>
                                <p> Jai Hind College, A Rd, Churchgate, Mumbai, Maharashtra, 400020.</p>

                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="second">
                                <h4> Email<i class="icon-envelope-letter"></i></h4>
                                <ul>
                                    <li><a href="mailto:info@arthanomics.co">info@arthanomics.co</a></li>

                                </ul>
                            </div>
                        </div>

                        <div class="col-md-4 col-xs-12">
                            <div class="third">
                                <h4> Contact<i class="icon-phone"></i></h4>
                                <ul>
                                    <li>Poorva Badaya: +91 9460966918
                                    </li>
                                    <li>
                                        Swasti Bharill: +91 9867713176

                                    </li>



                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Start: Social Icons Blue -->
                <div class=" row" style="width: 100%; justify-content: center;">
                    <div class="icons"><a href="https://www.linkedin.com/company/arthanomics-2018/ "><i
                                class="fa fa-linkedin"></i></a><a href="https://www.facebook.com/Arthanomics/"><i
                                class="fa fa-facebook"></i></a><a
                            href="https://www.instagram.com/arthanomics_2020/?igshid=154jp77e163y1"><i
                                class="fa fa-instagram"></i></a><a href="https://twitter.com/Arthanomics2020"><i
                                class="fa fa-twitter"></i></a></div>
                </div>
                <div style="width:100%; font-size: 15px; height: 30px; text-align:center; color:lightgray; margin-top: 15px;">
                    Created by <a style="color: lightgray;"href="https://www.linkedin.com/in/shruti-kumar15/">Shruti Kumar</a> & <a style="color: lightgray;"href="https://www.linkedin.com/in/premnagdeo/">Prem Nagdeo</a>
                </div>  
                <!-- End: Social Icons Blue -->
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/index2.js"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></>

</body>

</html>