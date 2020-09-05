<?php
include 'config.php';
$servername = $config['DB_HOST'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
$dbname = $config['DB_DATABASE'];

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
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/css/NZDropdown---Single.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/contingent.css">
</head>

<body onload="addmember1()">
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo"href="index.php" style="margin-right: 3px;"><img
                    src="assets/img/LOGO%20WITHOUT%20NAME%20.png" style="opacity: 1;width: 60px;height: 50px;"></a>
            <div><img src="assets/img/Top%20(1).png" style="width: 170px;height: 18px20px;"></div><button id="btn-faq"
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="about-us.html">About</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="events.html">events</a>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link"
                            href="collaborations.html">Collaborations</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="faq.html">faq</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="registration.php">Scores</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page registration-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p></p>
                </div>
                <form method="post" id="mainform" enctype="multipart/form-data" style="margin-top: 10px;" action="submit.php">
                    <div id="participants">
                        <div class="form-group"><label style="font-size:13px">The Point of Contact (POC) should be a participant from your contingent.</label></div>
                        <div class="form-group"><label for="name">Contingent Name<span class="imp"> *</span></label>
                        <?php

                        $sql = "SELECT name FROM contingent_name where taken='N'";
                        $result = $conn -> query ($sql);
                        
                        echo "<select required autofocus='' class='form-control' id='contingent-name' name='contingentname' placeholder='Name' required=''>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
                        }
                        echo "</select>";
                        
                        ?>
                        </div>
                        <input type="text" id="hidden1" name="no_of_members" style="display:none"; value="1"/>
                        <input type="text" id="hidden" name="all_names" style="display:none";/>

                        
                        <div class="form-group name" ><label for="name">Contingent PoC Name<span class="imp"> *</span></label><input class="form-control item" required type="name"  name="namein[]" required></div>
                        <div class="form-group email"  ><label for="email">Contingent PoC Email<span class="imp"> *</span></label><input class="form-control item" required type="text"name="email[]" required></div>
                        <div class="form-group phone" ><label for="phone">Contingent PoC Phone<span class="imp"> *</span></label><input class="form-control item"  requiredtype="text" name="phone[]" required></div> 
                        <div class="form-group uploadiv" ><label for="upload" style="margin-bottom:0;">Upload School/College ID proof <span class="imp"> *</span></label>
                        <label style="font-size:13px">(ID cards, Marksheet, Fee Receipt, etc)</label>
                        <input type="file" name="uploadid[]"  required class=" btn-light btn-block border-primary" onclick="uploadid()" id="upload" style="color: rgb(4,115,227);"/></div>
                        
                        
                        <button class="btn btn-light btn-block border-primary" onclick="addmember()" id="add" style="color: rgb(4,115,227);">Add Member</button>
                        
                        <button class="btn btn-primary btn-block"  id="next" type="button" onclick="addnames()" >Next</button>
                        
                        
                    </div>
                    
                        <div id="events" style="display:none">
                        
                        <div class="form-group"><label class="event-title" >Events</label>
                            <div class="form-check">
                                <?php
                                    $sql = "SELECT * FROM powerplay";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$count."";
                                    if($count>=70){
                                        echo "<input type='checkbox' name='check_powerplay' disabled class='form-check-input' id='Powerplay'>";
                                    }
                                    else{
                                        echo "<input type='checkbox' name='check_powerplay' class='form-check-input' id='Powerplay'>";
                                    }

                                ?>
                                <label class="form-check-label" for="Powerplay">Powerplay</label>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;">A cricket auction team building event </label>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 1</label>
                            </div>
                            <div class="form-check">
                                
                                <?php
                                    $sql = "SELECT * FROM stockitup";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=100){
                                        echo "<input type='checkbox'name='check_stockitup' disabled class='form-check-input' id='StockItUp'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_stockitup' class='form-check-input' id='StockItUp'>";
                                    }

                                ?>
                                <label class="form-check-label" for="StockItUp">Stock It Up</label>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;">An online stock trading simulation platform </label>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 1</label>
                            </div>
                            <div class="form-check">
                                <?php
                                    $sql = "SELECT * FROM comiccatalysis";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=50){
                                        echo "<input type='checkbox'name='check_comiccatalysis' disabled class='form-check-input' id='ComicCatalysis'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_comiccatalysis' class='form-check-input' id='ComicCatalysis'>";
                                    }

                                ?>
                                <label class="form-check-label" for="ComicCatalysis">Comic Catalysis</label>
                                <br>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;">Caricatures and meme event </label>
                                <br>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 1</label>
                            </div>
                            <div class="form-check" style="display:none">
                                <?php
                                    $sql = "SELECT * FROM caseconundrum";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=25){
                                        echo "<input type='checkbox'name='check_caseconundrum' disabled class='form-check-input' id='CaseConundrum'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_caseconundrum' class='form-check-input' id='CaseConundrum'>";
                                    }

                                ?>
                                <label class="form-check-label" for="CaseConundrum">Case Conundrum</label>
                                <br>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;">Case study competition </label>
                                <br>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 1</label>
                            </div>
                            <div class="form-check" style="display:none">
                                <?php
                                    $sql = "SELECT * FROM thesnaptheory";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=40){
                                        echo "<input type='checkbox'name='check_thesnaptheory' disabled class='form-check-input' id='TheSnapTheory'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_thesnaptheory' class='form-check-input' id='TheSnapTheory'>";
                                    }

                                ?>
                                <label class="form-check-label" for="TheSnapTheory">The Snap Theory</label>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;">A simulation of an economic crisis in the Marvel Cinematic Universe </label>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 1</label>
                            </div>
                            <div class="form-check"  style="display:none">

                                <?php
                                    $sql = "SELECT * FROM doomanddestiny";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=18){
                                        echo "<input type='checkbox'name='check_doomanddestiny' disabled class='form-check-input' id='DoomAndDestiny'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_doomanddestiny' class='form-check-input' id='DoomAndDestiny'>";
                                    }

                                ?>
                                <label class="form-check-label" for="DoomAndDestiny">Doom And Destiny</label>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;"> A game of persuasion with an online scavenger hunt </label>
                                <br>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 2</label>
                            </div>
                            <div class="form-check"  style="display:none">
                                
                                <?php
                                    $sql = "SELECT * FROM arthanomicsassembly";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=24){
                                        echo "<input type='checkbox'name='check_arthanomicsassembly' disabled class='form-check-input' id='ArthanomicsAssembly'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_arthanomicsassembly' class='form-check-input' id='ArthanomicsAssembly'>";
                                    }

                                ?>
                                <label class="form-check-label" for="ArthanomicsAssembly">Arthanomics Assembly</label>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;">  A political debate competition </label>
                                <br>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 2</label>
                            </div>
                            <div class="form-check"  style="display:none">
        
                                <?php
                                    $sql = "SELECT * FROM marketingmaestros";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=50){
                                        echo "<input type='checkbox'name='check_marketingmaestros' disabled class='form-check-input' id='MarketingMaestros'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_marketingmaestros' class='form-check-input' id='MarketingMaestros'>";
                                    }

                                ?>
                                <label class="form-check-label" for="MarketingMaestros">Marketing Maestros</label>
                                <br>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;"> Marketing event </label>
                                <br>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 2</label>
                            </div>
                            <div class="form-check"  style="display:none">
                                
                                <?php
                                    $sql = "SELECT * FROM policypandemonium";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=32){
                                        echo "<input type='checkbox'name='check_policypandemonium' disabled class='form-check-input' id='PolicyPandemonium'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_policypandemonium' class='form-check-input' id='PolicyPandemonium'>";
                                    }

                                ?>
                                <label class="form-check-label" for="PolicyPandemonium">Policy Pandemonium</label>
                                <br>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;"> A policy making event </label>
                                <br>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 2</label>
                            </div>
                            <div class="form-check"  style="display:none">
                        
                                <?php
                                    $sql = "SELECT * FROM journalisminjeopardy";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=24){
                                        echo "<input type='checkbox'name='check_journalisminjeopardy' disabled class='form-check-input' id='JournalisminJeopardy'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_journalisminjeopardy' class='form-check-input' id='JournalisminJeopardy'>";
                                    }

                                ?>
                                <label class="form-check-label" for="JournalisminJeopardy">Journalism in Jeopardy</label>
                                <br>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;"> A journalism event </label>
                                <br>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 2</label>
                            </div> 
                            <div class="form-check"  style="display:none">

                                <?php
                                    $sql = "SELECT * FROM tycoonsoftomorrow";
                                    $result = $conn -> query ($sql);
                                    $count = mysqli_num_rows($result);
                                    //echo "".$stockitup."";
                                    if($count>=40){
                                        echo "<input type='checkbox'name='check_tycoonsoftomorrow' disabled class='form-check-input' id='TycoonsofTomorrow'>";
                                    }
                                    else{
                                        echo " <input type='checkbox' name='check_tycoonsoftomorrow' class='form-check-input' id='TycoonsofTomorrow'>";
                                    }

                                ?>
                                <label class="form-check-label" for="TycoonsofTomorrow">Tycoons of Tomorrow</label>
                                <label style="font-size:15px;margin-left:10px; margin-bottom:0px;"> A platform for budding/aspiring entrepreneurs</label>
                                <label style="font-size:15px; margin-left:10px; margin-bottom:12px">No. of members: 2</label>
                            </div>
                            <label style="margin-top:10px ;font-weight:500; font-family:sans-serif;" >Note:<li>
                            If you are unable to see a particular event in this list, the capacity for that event is full.
                            </li> 
                        <li>
                        Please refer to the event schedule in the brochure or on the website before selecting your event to make sure their timings don’t clash.
                        </li></label>
                            <div style="display:flex; flex-direction:row;">
                            <button class="btn btn-primary btn-block" style='margin-top:10px; margin-right:10px' id="prev2" type="button" onclick="previous2()" >Previous</button>                       
                            <button class="btn btn-primary btn-block" style='margin-top:10px;' id="next2" type="button" onclick="displayevents()" >Next</button>
                            </div>
                        </div>
                    </div>
                    <div id="display_events" style="display:none">
                    <button class="btn btn-primary btn-block"  style='margin-top:10px;display:none;' id="sub"; type="submit"  >Next</button>
                    </div>
               
                </form>
                

                    
            </div>
        </section>
    </main>
    <section>
        <!-- Start: Social Icons Blue -->
        <div class="clean-block add-on social-icons blue" style="display: block; padding-bottom: 0!important;">
            <div class="icons"> 
                <a href="https://www.linkedin.com/company/arthanomics-2018/ "><i
                        class="fa fa-linkedin"></i></a><a href="https://www.facebook.com/Arthanomics/"><i
                        class="fa fa-facebook"></i></a><a
                    href="https://www.instagram.com/arthanomics_2020/?igshid=154jp77e163y1"><i
                        class="fa fa-instagram"></i></a><a href="https://twitter.com/Arthanomics2020"><i
                        class="fa fa-twitter"></i></a>
                    </div>
                    
                    <div style="font-size: 15px; height: 30px; color: lightgray; margin-top: 15px;">
                         Created by <a style="color: lightgray;"href="https://www.linkedin.com/in/shruti-kumar15/">Shruti Kumar</a> & <a style="color: lightgray;"href="https://www.linkedin.com/in/premnagdeo/">Prem Nagdeo</a>
                    </div>  
        </div>
        <!-- End: Social Icons Blue -->
    </section>
   
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/contingent.js"></script>
    <script src="assets/js/faq.js"></script>
</body>

</html>