<?php
include 'config.php';

$servername = $config['DB_HOST'];
$username = $config['DB_USERNAME'];
$password = $config['DB_PASSWORD'];
$dbname = $config['DB_DATABASE'];

$conn = mysqli_connect($servername , $username ,$password ,$dbname);

$filename = $_FILES['uploadpayment']["name"];
$filetmpname = $_FILES['uploadpayment']["tmp_name"];
$folder = "paymentuploads/";
$payment_done = "Yes";
move_uploaded_file($filetmpname, $folder.$filename);

if ($_POST['rad']=='contingent') {
    $contingent_name = $_POST['contingent_select'];

    $sql = " UPDATE contingent  SET payment_done = 'Yes' Where contingent_name='$contingent_name'";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } 
    else {
        var_dump($_POST);
        print_r($_FILES);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = " UPDATE contingent  SET payment_pic = '$filename' Where contingent_name='$contingent_name'";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } 
    else {
        var_dump($_POST);
        print_r($_FILES);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

} else {
    $cparticipant_name =  $_POST['individual_select'];
    $sql = " UPDATE individual_participant  SET payment_done = 'Yes' Where cparticipant_name='$cparticipant_name'";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } 
    else {
        var_dump($_POST);
        print_r($_FILES);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $sql = " UPDATE individual_participant  SET payment_pic = '$filename' Where cparticipant_name='$cparticipant_name'";
    if ($conn->query($sql) === TRUE) {
        //echo "New record created successfully";
    } 
    else {
        var_dump($_POST);
        print_r($_FILES);
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
//$table_name  = $_POST['no_of_members'];
echo "<h1>Thank you.</h1> ";
echo "<h2>Your registration has now been completed. </h2>";
echo "<h2>The Contingent POC/ Individual will receive a Post Registration Brochure in a couple of days.</h2>";
echo "<h2>If you do not receive it by then, then contact us.</h2>";
echo "<h2> Poorva Badaya: +91 9460966918</h2>";
echo "<h2>Swasti Bharill: +91 9867713176</h2>";
?>