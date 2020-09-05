<?php
include 'config.php';

$servername = $config['DB_HOST'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
$dbname = $config['DB_DATABASE'];

$conn = mysqli_connect($servername , $username ,$password ,$dbname);

$sql = "SELECT id FROM contingent";
$result = $conn -> query ($sql);

$event_tables = array("powerplay","stockitup","comiccatalysis","caseconundrum","thesnaptheory","doomanddestiny","arthanomicsassembly","marketingmaestros","policypandemonium","journalisminjeopardy","tycoonsoftomorrow");
$choice_tables = array("choice_powerplay","choice_stockItUp","choice_comicCatalysis","choice_caseConundrum","choice_theSnapTheory","choice_doomAndDestiny","choice_arthanomicsAssembly","choice_marketingMaestros","choice_policyPandemonium","choice_journalisminJeopardy","choice_tycoonsofTomorrow");

//echo "<label> " . $result . " </label>";

$contingentname = $_POST['contingentname'];
//$string = 'name='.$contingentname.';';
$sql ="UPDATE contingent_name SET taken='Y' WHERE name='$contingentname'";
if ($conn->query($sql) === TRUE) {
    //echo "New contingent set successfully";
  } else { 
    var_dump($_POST);
    print_r($_FILES);
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$no_of_members  = $_POST['no_of_members'];
$multi_single = "S";
//if button with the name uploadfilesub has been clicked

    //declaring variables
    //$filename = $_FILES["paymentpic"]["name"];
    //$filetmpname = $_FILES["paymentpic"]["tmp_name"];
    //folder where images will be uploaded
    //$folder = "paymentuploads/";
    //function for saving the uploaded images in a specific folder
    //move_uploaded_file($filetmpname, $folder.$filename);
    

    $filename='-';
    $payment_type = '-';
    $payment_amount = 150*($no_of_members);

$sql = "INSERT INTO  contingent (contingent_name,no_of_members,multi_single,payment_pic,payment_type,payment_amount, id_verified, date_added, payment_done) VALUES ( '$contingentname', '$no_of_members', '$multi_single', '$filename', '$payment_type','$payment_amount','No',CURDATE() ,'No' )";
//$qry = mysqli_query($conn, $sql);

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
  } else {
    var_dump($_POST);
    print_r($_FILES);
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

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

    $sql = "INSERT INTO  contingent_participant (contingent_name,cparticipant_name,cparticipant_email, cparticipant_phone,  id_pic, id_verified, isContingentPoc) VALUES ('$contingentname', '$cparticipant_name', '$cparticipant_email', '$cparticipant_phone','$filename','$id_verified','$isContingentPoc')";


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
echo "<h2>We will contact the Contingent Point of Contact with further details.</h2>";
echo "<h2>If you are not contacted within 5-7 business days, please reach out to us.</h2>";
echo "<h2> Poorva Badaya: +91 9460966918</h2>";
echo "<h2>Swasti Bharill: +91 9867713176</h2>";
?> 