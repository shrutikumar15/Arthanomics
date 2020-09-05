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

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="index.php" style="margin-right: 3px;"><img
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
                <div class="block-heading" style="width: 100%; margin-left: auto;">
                    <h2 class="text-info">Payment</h2>
                    
                    <label style="margin-top:10px ;font-weight:500; font-family:sans-serif; text-align: left;" > <li>Only one person from a contingent will have to make the payment for all the contingent members at once. </li>
                        <li>Once the payment form below is submitted, your registration will be completed.</li>
                        <li>No refund will be provided so please be extra careful while making the payment. </li>
                        <li>If there are any technical glitches or issues while payment, contact us: 
                            <ul>
                                <li>
                                Poorva Badaya: +91 9460966918 
                                </li>
                                <li>
                                Swasti Bharill:  +91 9867713176
                                </li>
                            </ul>
                        </li>    
                    </label>
                    
                </div>
                <form method="post" id="paymentform" enctype="multipart/form-data" style="margin-top: 10px;" action="submitpayment.php">
                    <div id="payment_fdiv">
                    <label style="margin-top:10px ;font-weight:500; font-family:sans-serif; text-align: left;" > 
                        <li>If you’re an individual and can’t find your name in the drop down box that means your 48 hours to make the payment have expired and your registration is no longer valid.</li>
                        <li>If you’re a contingent and can’t find your contingent code in the drop down box that means your 48 hours to make the payment have expired and your registration is no longer valid. </li>
                    </label>
                        <input type="radio" id="contingent_radio" name="rad" value="contingent">Contigent
                        <input style="margin-left:30px"type="radio" id="individual_radio" name="rad" value="individual">Individual

                        <?php

                        $sql = "SELECT cparticipant_name,payment_amount FROM individual_participant where id_verified='Yes' and DATEDIFF( CURDATE(), individual_participant.date_added) <= 2 and payment_done='No'";
                        $result = $conn -> query ($sql);

                        echo "<select autofocus='' style='display:none ;margin-top:20px' class='form-control' id='individual_select' name='individual_select' placeholder='Name' required=''>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['cparticipant_name'] . "'>" . $row['cparticipant_name'] . "</option>";
                        }
                        echo "</select>";

                        echo "<select style='display:none'autofocus='' class='form-control' id='individual_select_amount' name='individual_select_amount' placeholder='Amount' required=''>";
                        $result = $conn -> query ($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['payment_amount'] . "'>" . $row['payment_amount'] . "</option>";
                        }
                        echo "</select>";

                        $sql = "SELECT contingent_name,payment_amount FROM contingent where id_verified='Yes' and DATEDIFF( CURDATE(), contingent.date_added) <= 2 and payment_done='No'";
                        $result = $conn -> query ($sql);

                        echo "<select autofocus='' style='margin-top:20px' class='form-control' id='contingent_select' name='contingent_select' placeholder='Name' required=''>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['contingent_name'] . "'>" . $row['contingent_name'] . "</option>";
                        }
                        echo "</select>";

                        echo "<select style='display:none'autofocus='' class='form-control' id='contingent_select_amount' name='contingent_select_amount' placeholder='Amount' required=''>";
                        $result = $conn -> query ($sql);
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<option value='" . $row['payment_amount'] . "'>" . $row['payment_amount'] . "</option>";
                        }
                        echo "</select>";

                        ?>

                        <button style="margin-top:20px"class="btn btn-primary btn-block"  id="next" type="button" onclick="addname()" >Next</button>
                    </div>
                    
                        <div id="events" style="display:none">
                        
                        <div class="form-group">
                            
                            <p style="margin-top:10px ;font-weight:500; font-family:sans-serif;" id="amount"></p >
                            <label style="margin-top:10px ;margin-bottom: 20px;font-weight:500; font-family:sans-serif;" ><li >The Payment link below will open on a new tab for making the final payment. Make sure that you take a screenshot of the final receipt shown on the payment portal. </li>
                            <li>While you are redirected to the payment tab, please be extra careful to not close this form’s tab as you need to come back to this form to upload the screenshot of the receipt.</li>
                            <a target="_blank" href="https://google.com">Payment Link</a>   
                           </label>
                           <label >Upload Payment receipt screenshot</label><input type="file" name="uploadpayment" class=" btn-light btn-block border-primary"  id="upload" style="color: rgb(4,115,227);"/></div>
                            <div style="display:flex; flex-direction:row;">
                            <button class="btn btn-primary btn-block" style='margin-top:10px; margin-right:10px' id="prev2" type="button" onclick="previous2()" >Previous</button>                       
                            <button class="btn btn-primary btn-block" style='margin-top:10px;'type="button" id="next2"  onclick="submitpayment()" >Submit</button> 
                            <button class="btn btn-primary btn-block" style='margin-top:10px; display:none' id="sub" type="submit"  >Submit</button>           
                           
                            </div>
                        </div>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <script src="assets/js/payment.js"></script>
    <script src="assets/js/faq.js"></script>
</body>

</html>