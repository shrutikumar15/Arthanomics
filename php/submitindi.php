<?php
include 'config.php';

$servername = $config['DB_HOST'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
$dbname = $config['DB_DATABASE'];

$conn = mysqli_connect($servername , $username ,$password ,$dbname);



$event_tables = array("powerplay","stockitup","comiccatalysis","caseconundrum","thesnaptheory","doomanddestiny","arthanomicsassembly","marketingmaestros","policypandemonium","journalisminjeopardy","tycoonsoftomorrow");
$choice_tables = array("choice_powerplay","choice_stockItUp","choice_comicCatalysis","choice_caseConundrum","choice_theSnapTheory","choice_doomAndDestiny","choice_arthanomicsAssembly","choice_marketingMaestros","choice_policyPandemonium","choice_journalisminJeopardy","choice_tycoonsofTomorrow");



$contingentname = '-';
$no_of_members  = $_POST['no_of_members'];
//$string = 'name='.$contingentname.';';

//if button with the name uploadfilesub has been clicked

    //declaring variables
    //$filenamee = $_FILES["paymentpic"]["name"];
    //$filetmpname = $_FILES["paymentpic"]["tmp_name"];
    //folder where images will be uploaded
    //$folder = "paymentuploads/";
    //function for saving the uploaded images in a specific folder
    //move_uploaded_file($filetmpname, $folder.$filenamee);
    

    $filenamee='-';
    $payment_type = '-';
    $payment_amount = 150*($no_of_members);


//$qry = mysqli_query($conn, $sql);

  for ($x = 0; $x < $no_of_members; $x++) {

    $cparticipant_name = $_POST['namein'][$x];
    $cparticipant_email = $_POST['email'][$x];
    $cparticipant_phone = $_POST['phone'][$x];
  

    $filename = $_FILES['uploadid']["name"][$x];
    $filetmpname = $_FILES['uploadid']["tmp_name"][$x];
    //folder where images will be uploaded
    $folder = "id/";
    //function for saving the uploaded images in a specific folder
    move_uploaded_file($filetmpname, $folder.$filename);
    $id_verified = "No";
    $isContingentPoc="no";
    if($x==0){
        $isContingentPoc="Yes";
    }
    else{
        $isContingentPoc="No";
    }

    $sql = "INSERT INTO  individual_participant (cparticipant_name,cparticipant_email, cparticipant_phone, payment_pic	,payment_type, payment_amount, id_pic, id_verified, date_added, payment_done) VALUES ( '$cparticipant_name', '$cparticipant_email', '$cparticipant_phone','$filenamee','$payment_type','$payment_amount','$filename','$id_verified', CURDATE() ,'No')";


if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
  } else {
    var_dump($_POST);
    print_r($_FILES);
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}


for($index = 0; $index<11; $index++){
    $choice = $choice_tables[$index];
    $table = $event_tables[$index];
    if(isset($_POST[$choice])){
        $size = sizeof($_POST[$choice]);
        for($x=0; $x<$size; $x++){
            $cparticipant_name = $_POST[$choice][$x];
            if($x%2==0){
                $isTeamPoc = "Yes";
            }
            else{
                $isTeamPoc = "No";
            }
            $sql = "INSERT INTO $table (contingent_name, cparticipant_name,  isTeamPoc) VALUES ('$contingentname', '$cparticipant_name', '$isTeamPoc')";
    
    
            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully";
            } else {
                var_dump($_POST);
                print_r($_FILES);
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        
    
    }    
}

echo "<h1>Thank you for registering with Arthanomics 2020!</h1> ";
echo "<h2>We will contact you with further details</h2>";
echo "<h2>If you are not contacted within 5-7 business days, please reach out to us.</h2>";
echo "<h2> Poorva Badaya: +91 9460966918</h2>";
echo "<h2>Swasti Bharill: +91 9867713176</h2>";
?> 