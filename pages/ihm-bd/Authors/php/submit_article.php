<?php
/**
 * Created by PhpStorm.
 * User: URTI
 * Date: 19/01/2016
 * Time: 10:15
 */
$nb_co=intval($_POST["nb_co"]) ;
 $mainfile=$_POST["main_file"];
$output = array();
$path='C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\site\pages\ihm-bd\Authors\files\15\temp';
chdir($path);
$outputt=exec("xelatex  ".$mainfile,$output);
print_r ($output);
$filedec =  explode('.', $mainfile );

$filename=$filedec[0].".pdf";

if (file_exists($filename)) {
    echo "Le fichier $filename existe.";
    chdir('C:\Program Files (x86)\EasyPHP-DevServer-14.1VC11\data\localweb\site\pages\ihm-bd\Authors\php');
    //insertion article
    include_once("../../../../php/cnx.php");

    $idauthor=15;
    $cl� = md5(uniqid(rand(), true));
    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $type=mysqli_real_escape_string($conn,$_POST['type']);
    $area=mysqli_real_escape_string($conn,$_POST['area']);
    $abstract=mysqli_real_escape_string($conn,$_POST['abstract']);
    $keywords=mysqli_real_escape_string($conn,$_POST['keyword']);
    $mainfile=mysqli_real_escape_string($conn,$_POST["main_file"]);
    $nb_im=intval(mysqli_real_escape_string($conn,$_POST["nb_im"]));

    $inser = $conn->query("INSERT INTO article (author, title, type, area, abstract, keywords, fichierZip, date,state,cl�) VALUES ('".$idauthor."','".$title."','".$type."','".$area."','".$abstract."','".$keywords."','".$filename."',now(),'validation','".$cl�."')");



    if($inser){
        $idarticle=mysqli_insert_id($conn);
        for($i=1;$i<=$nb_co;$i++){
            $fname=mysqli_real_escape_string($conn,$_POST["co_fn".$i]);
            $mname=mysqli_real_escape_string($conn,$_POST['co_ln'.$i]);
            $lname=mysqli_real_escape_string($conn,$_POST['co_ln'.$i]);
            $affiliation=mysqli_real_escape_string($conn,$_POST['co_af'.$i]);
            $address1=mysqli_real_escape_string($conn,$_POST['co_ad'.$i]);

            $email=mysqli_real_escape_string($conn,$_POST['co_em'.$i]);
            $inser = $conn->query("INSERT INTO co_author (fname, mname, lname, affiliation,adresse,email,article) VALUES ('".$fname."','".$mname."','".$lname."','".$affiliation."','".$address1."','".$email."',".$idarticle.")");}
            if($inser){

                $inserfile = $conn->query("INSERT INTO file (name, url,article,type) VALUES ('".$mainfile."','',".$idarticle.",'file_source')");
                    for($j=1;$j<=$nb_im;$j++){

                        $inserfile = $conn->query("INSERT INTO file (name, url,article,type) VALUES ('".$mainfile."','',".$idarticle.",'file_source')");

                    }

            }else{



            }
    }
    else{
        die('Error : ('. $conn->error .') '. $conn->error);
    }
} else {


    echo "Le fichier $filename n'existe pas.";
}

/**if (isset($_POST["title"])){


    echo $_POST["title"];
}else{
    echo '0';
}*/




?>