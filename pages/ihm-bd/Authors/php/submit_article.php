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
$path='C:\Program Files (x86)\EasyPHP-Devserver-16.1\eds-www\site\pages\ihm-bd\Authors\files\15\temp';
chdir($path);
$outputt=exec("xelatex  ".$mainfile,$output);
//print_r ($output);
$filedec =  explode('.', $mainfile );

$filename=$filedec[0].".pdf";
if (file_exists($filename)) {
     chdir('C:\Program Files (x86)\EasyPHP-Devserver-16.1\eds-www\site\pages\ihm-bd\Authors\php');
    //insertion article
    include_once("../../../../php/cnx.php");

    $idauthor=15;
    $cle = md5(uniqid(rand(), true));
    $title=mysqli_real_escape_string($conn,$_POST['title']);
    $type=mysqli_real_escape_string($conn,$_POST['type']);
    $area=mysqli_real_escape_string($conn,$_POST['area']);
    $abstract=mysqli_real_escape_string($conn,$_POST['abstract']);
    $keywords=mysqli_real_escape_string($conn,$_POST['keyword']);
    $mainfile=mysqli_real_escape_string($conn,$_POST["main_file"]);
    $main_type=mysqli_real_escape_string($conn,$_POST["ext_file"]);
    $main_size=mysqli_real_escape_string($conn,$_POST["size_file"]);
    $nb_im=intval(mysqli_real_escape_string($conn,$_POST["nb_im"]));

    $inser = $conn->query("INSERT INTO article (author, title, type, area, abstract, keywords, fichierZip, date,state,cle) VALUES ('".$idauthor."','".$title."','".$type."','".$area."','".$abstract."','".$keywords."','".$filename."',now(),'validation','".$cle."')");



    if($inser){
        $idarticle=mysqli_insert_id($conn);
        mkdir("../files/".$idauthor."/".$idarticle."/source",0777,true);
        for($i=1;$i<=$nb_co;$i++){
            $fname=mysqli_real_escape_string($conn,$_POST["co_fn".$i]);
            $mname=mysqli_real_escape_string($conn,$_POST['co_ln'.$i]);
            $lname=mysqli_real_escape_string($conn,$_POST['co_ln'.$i]);
            $affiliation=mysqli_real_escape_string($conn,$_POST['co_af'.$i]);
            $address1=mysqli_real_escape_string($conn,$_POST['co_ad'.$i]);

            $email=mysqli_real_escape_string($conn,$_POST['co_em'.$i]);
            $inser = $conn->query("INSERT INTO co_author (fname, mname, lname, affiliation,adresse,email,article) VALUES ('".$fname."','".$mname."','".$lname."','".$affiliation."','".$address1."','".$email."',".$idarticle.")");}
            if($inser){

                $inserfile = $conn->query("INSERT INTO file (name, size,article,type,extension) VALUES ('".$mainfile."','".$main_size."',".$idarticle.",'file_source','".$main_type."')");
                    rename("../files/".$idauthor."/temp/".$mainfile."","../files/".$idauthor."/".$idarticle."/source/".$mainfile."");

                $inserfile=$conn->query("INSERT INTO file (name, size,article,type) VALUES ('".$filename."','',".$idarticle.",'AJAM-D')");
                rename("../files/".$idauthor."/temp/".$filename."","../files/".$idauthor."/".$idarticle."/ajam_D_".$idarticle.".pdf");
                $ajam_d=mysqli_insert_id($conn);

                $inserfile=$conn->query("INSERT INTO state_author (article, file,date,state) VALUES ('".$idarticle."','".$ajam_d."',now(),'validation')");

                    for($j=1;$j<=$nb_im;$j++){

                        rename("../files/".$idauthor."/temp/".mysqli_real_escape_string($conn,$_POST['image'.$j])."","../files/".$idauthor."/".$idarticle."/source/".mysqli_real_escape_string($conn,$_POST['image'.$j])."");
                        $inserimage = $conn->query("INSERT INTO file (name, size,article,type,extension) VALUES ('".mysqli_real_escape_string($conn,$_POST['image'.$j])."','".mysqli_real_escape_string($conn,$_POST['images'.$j])."',".$idarticle.",'image_source','".mysqli_real_escape_string($conn,$_POST['imagee'.$j])."')");

                    }
                echo "1";
                     //mail





            }else{



            }
    }
    else{
        die('Error : ('. $conn->error .') '. $conn->error);
    }
} else {


    echo "0";
}

/**if (isset($_POST["title"])){


    echo $_POST["title"];
}else{
    echo '0';
}*/




?>