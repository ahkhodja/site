<?php
session_start();
$idauthor=$_SESSION['id'];


$conn= new mysqli('localhost','root','','ajam');
$title=mysqli_real_escape_string($conn,$_POST['title_area']);
$type=mysqli_real_escape_string($conn,$_POST['type_of_paper']);
$area=mysqli_real_escape_string($conn,$_POST['area_of_article']);
$abstract=mysqli_real_escape_string($conn,$_POST['abstract_area']);
$keywords=mysqli_real_escape_string($conn,$_POST['keywords']);
$file=$_FILES['file']['name'][0];
	

$inser = $conn->query("INSERT INTO article (author, title, type, area, abstract, keywords, fichierZip, date) VALUES ('".$idauthor."','".$title."','".$type."','".$area."','".$abstract."','".$keywords."','".mysqli_real_escape_string($conn,$file)."',now())");

if($inser){
  $idarticle=mysqli_insert_id($conn);
  

    $nom = md5(uniqid(rand(), true));
	
	
	
	
	
	
  $extension_upload = strtolower(  substr(  strrchr($file, '.')  ,1)  );
  rename("../files/".$idauthor."/temp/".$file."", "../files/".$idauthor."/".$nom.".".$extension_upload."");
  $inserfile = $conn->query("INSERT INTO file (name, url,article,type) VALUES ('".mysqli_real_escape_string($conn,$file)."','".$nom.".".$extension_upload."',".$idarticle.",'new')");
  $fileid=mysqli_insert_id($conn);
  $inserstate = $conn->query("INSERT INTO state_author (article, file,date,state) VALUES ('".$idarticle."','".$fileid."',now(),'new')");
  $inserstate2 = $conn->query("INSERT INTO state_office (article, file,date,etat) VALUES ('".$idarticle."','".$fileid."',now(),'new')");
  
 
  
  
  
}else{
	  unlink("../files/".$idauthor."/temp/".$file."");
    die('Error : ('. $conn->error .') '. $conn->error);
	
}
$nb=intval($_POST['number_co_authors']);
for($i=1;$i<=$nb;$i++){
$fname=mysqli_real_escape_string($conn,$_POST["first_name".$i]);
$mname=mysqli_real_escape_string($conn,$_POST['middle_name'.$i]);
$lname=mysqli_real_escape_string($conn,$_POST['last_name'.$i]);
$affiliation=mysqli_real_escape_string($conn,$_POST['affiliation'.$i]);
$address1=mysqli_real_escape_string($conn,$_POST['address-1'.$i]);
$address2=mysqli_real_escape_string($conn,$_POST['address-2'.$i]);
$email=mysqli_real_escape_string($conn,$_POST['e-mail'.$i]);
$inser = $conn->query("INSERT INTO co_author (fname, mname, lname, affiliation,adresse,email,article) VALUES ('".$fname."','".$mname."','".$lname."','".$affiliation."','".$address1.$address2."','".$email."',".$idarticle.")");}
if($inser){
	
	$conn->close();
	
	
	
	
;
}else{
    die('Error : ('. $conn->error .') '. $conn->error);
}
 ?>