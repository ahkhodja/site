<?php 
include_once('cnx.php');
$titre=mysqli_real_escape_string($conn,$_POST['title']);
$fname=mysqli_real_escape_string($conn,$_POST['first_name']);
$mname=mysqli_real_escape_string($conn,$_POST['middle_name']);
$lname=mysqli_real_escape_string($conn,$_POST['last_name']);
$Affiliation=mysqli_real_escape_string($conn,$_POST['affiliation']);
$addr=mysqli_real_escape_string($conn,$_POST['address-1']);
$city=mysqli_real_escape_string($conn,$_POST['city']);
$state=mysqli_real_escape_string($conn,$_POST['region']);
$country=mysqli_real_escape_string($conn,$_POST['country']);
$pcode=mysqli_real_escape_string($conn,$_POST['post_code']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$fax=mysqli_real_escape_string($conn,$_POST['fax']);
$password=mysqli_real_escape_string($conn,md5($_POST['password']));


$inser = $conn->query("INSERT INTO personne ( fname, mname, lname, affiliation, adresse, city, state, contry, pcode, email, phone, fax, password,date) VALUES ('".$fname."','".$mname."','".$lname."','".$Affiliation."','".$addr."','".$city."','".$state."','".$country."','".$pcode."','".$email."','".$phone."','".$fax."','".$password."',now())");




if($inser){
	$id=mysqli_insert_id($conn);
	echo  $id;
     mkdir("../pages/ihm-bd/Authors/files/".$id."/temp",0777,true);
	 
 header('Location: ../pages/thank_you.html'); 
}else{
    die('Error : ('. $conn->error .') '. $conn->error);
}












?>