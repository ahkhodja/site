<?php 
include_once("cnx.php");
setlocale(LC_TIME, "fr_FR");
$select = $conn->query("SELECT id,title,type,area, DATE_FORMAT(date, '%d %M') as date FROM article WHERE author=".$_POST['id']."");

if ($select->num_rows!=0) {
	echo "
<div id=\"table_contenu\">
<legend> &nbsp;Track :</legend>
<table id=\"table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
 <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Type</th>
                <th>Area</th>
                <th>Date</th>
                <th>State</th>
            </tr>
        </thead>
		<tbody>
";
	 while($row = $select->fetch_assoc()){
	
      echo "
	   <tr>
                <td>". $row['id']."</td>
                <td><a href=\"#\" class=\"lien\">". $row['title']."</a></td>
                <td>". $row['type']."</td>
                <td>". $row['area']."</td>
                <td>". $row['date']."</td>
                <td>with verfication</td>
            </tr>
  ";

	 }
	 
echo'</tbody>
</table></div>';

}else
   echo'<div id="table_contenu"><h1>Aucun Resultat...</h1></div>';

{
	
	
	
	
	
	
	
	}



?>
