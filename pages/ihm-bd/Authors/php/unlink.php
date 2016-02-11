<?php
session_start();

/**
 * Created by PhpStorm.
 * User: TOSHIBA
 * Date: 08/02/2016
 * Time: 19:56
*/
$file=$_POST['file'];
$id=15;//a changer
$idar=$_POST['ida'];



include_once("../../../../php/cnx.php");
$sql="DELETE FROM `file` WHERE (`article`=".$idar.") AND (`name`='".$file."')";

if ($conn->query($sql) === TRUE) {
    unlink('../files/'.$id.'/'.$idar.'/source/'.$file);
    echo "1";
} else {
    echo "0";
}

?>

