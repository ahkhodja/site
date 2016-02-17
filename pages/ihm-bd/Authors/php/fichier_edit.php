<?php 
session_start();
//if(isset($_SESSION['id'])){
$id=15;
$idarticle=$_POST['idarticle'];
echo $idarticle;
	//$_SESSION['id'];

$name=$_FILES['file']['name'];

if(!empty($_FILES['file'])){

		if($_FILES['file']['error']==0 && move_uploaded_file($_FILES['file']['tmp_name'],"../files/".$id."/".$idarticle."/source/temp/{$name}")){$uploaded[]=$name;}

	
	print_r($uploaded);
	}
echo "files/".$id."/".$idarticle."/source/{$name}";
//}else{
//}
?>