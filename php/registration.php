
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
    <link rel="stylesheet" href="assets/css/events2.css">

    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
    <link type="text/css" rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <script type="text/javascript" src="assets/js/index.js"></script>

</head>

<body>
<?php
include 'config.php';
$servername = $config['DB_HOST'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
$dbname = 'arthaklk_scoreboard';

$conn = mysqli_connect($servername , $username ,$password ,$dbname);

 
?>



    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php" style="margin-right: 3px;"><img
                    src="assets/img/LOGO%20WITHOUT%20NAME%20.png" style="opacity: 1;width: 60px;height: 50px;"></a>
            <div><img src="assets/img/Top%20(1).png" style="width: 170px;height: 18px20px;"></div><button onclick="tog()"
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
        <section>
        <label class="text-event">LEADERBOARD</label>
        <?php
            

            echo "<div style='display:block; padding-bottom:20px'class='day1' id='leader'>";
            $sql2 = "SELECT * FROM `leaderboard`";
            $result2 = $conn -> query ($sql2);
            $row2 = mysqli_fetch_array($result2);
            
           
            echo " <table class='containerr'>
                        <thead>
                            <tr style=' border: 1px solid black'>
                                <th style='width:40%'>Ranks</th>
                                <th style='width:40%'>Name</th>
                            </tr>
                        </thead>
                        <tbody>";
            
            $sql3 = "SELECT * FROM `leaderboard` ORDER BY `leaderboard`.`rank` DESC";
            $result3 = $conn -> query ($sql3);
            $index = 1;
            while ($row3 = mysqli_fetch_array($result3)) {
                $data = $row3['name'];
                echo"<tr><td>$index</td><td>$data</td></tr>";
                $index+=1;
            }
            echo"</tbody></table>";
           
            echo "</div>";
            
            ?>
        </section>
        <section style="display:block">
            <label class="text-event">SCOREBOARDS</label>
            <div id="scoreboard" style="background-color:white">
                <?php
              
                
               
                    $event_names = array("Powerplay","Stock It Up","Comic Catalysis","Case Conundrum","The Snap Theory","Doom and Destiny","Arthanomics Assembly","Marketing Maestros","Policy Pandemonium","Journalism in Jeopardy","Tycoons of Tomorrow");
                    $event_tables = array("powerplay","stockitup","comiccatalysis","caseconundrum","thesnaptheory","doomanddestiny","arthanomicsassembly","marketingmaestros","policypandemonium","journalisminjeopardy","tycoonsoftomorrow");
                   
                    echo "<select style='width: 80%;
                    margin-left: 10%;' onchange='changeDiv()' autofocus='' class='form-control' id='event-name' >";
                    for ($x = 0; $x < 11; $x++) {
                       
                        $col_name = $event_tables[$x];
                        $event_name = $event_names[$x];
                        echo "<option id= '" .$col_name ."eve'name='eve' value='" . $col_name . "'>" . $event_name . "</option>";
                    }
                   
                    echo "</select>";
                    for ($x = 0; $x < 11; $x++) {
                        
                        $col_name = $event_tables[$x];
                        
                        $sql = "SELECT * FROM `scoreboard` where $col_name='Yes'";
                        $result = $conn -> query ($sql);
                        
                        
                        while ($row = mysqli_fetch_array($result)) {

                            echo "<div style='display:none; padding-bottom:20px'class='day' id='$col_name'>";
                            $sql2 = "SELECT * FROM `scoreboardname`";
                            $result2 = $conn -> query ($sql2);
                            $row2 = mysqli_fetch_array($result2);
                            $table_name=$row2[$col_name];
                            echo"<label class='txtLabel'style='width:80%'>
                            </label>";
                            echo " <table class='containerr'>
                                        <thead>
                                            <tr style=' border: 1px solid black'>
                                                <th style='width:40%'>$table_name</th>
                                            </tr>
                                        </thead>
                                        <tbody>";
                            
                            $sql3 = "SELECT * FROM $col_name";
                            $result3 = $conn -> query ($sql3);
                            while ($row3 = mysqli_fetch_array($result3)) {
                                $data = $row3['name'];
                                echo"<tr><td>$data</td></tr>";
                            }
                            echo"</tbody></table>";
                            $sql4 = "SELECT * FROM `scoreboardtext` where $col_name='Yes' ";
                            $result4 = $conn -> query ($sql4);
                            while($row4 = mysqli_fetch_array($result4)){
                                echo"<label class='txtLabel'style='width:80%'>The final round results will be declared at a later time</label>";
                            }
                            echo "</div>";
                        }
                    
                    }    
                

                ?>
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
   
    

    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js"></script>
</body>

</html>