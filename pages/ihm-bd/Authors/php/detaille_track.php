<?php 
include_once("cnx.php");
setlocale(LC_TIME, "fr_FR");
$select = $conn->query("SELECT state, DATE_FORMAT(date, '%d %M') as date FROM state_author WHERE article=".$_POST['id']."");


while($row = $select->fetch_assoc()){
	
	
	echo"<div id=\"table_contenu\">
<div class=\"panel panel-primary\">

  <table class=\"table table-striped table-condensed\">

    <div class=\"panel-heading\"> 

      <h3 class=\"panel-title text-center\">TRACK</h3>

    </div>

    <thead>

      <tr>

        <th width=\"80%\" class=\"text-center\">Status</th>

        <th class=\"text-center\">Date</th>

      </tr>

    </thead>

    <tbody>

      <tr>

        <td class=\"text-center\">".$row['state']."</td>

        <td class=\"text-center\">".$row['date']."</td>

      </tr>

      
    </tbody>

  </table>

</div>

</div>";
	
	
	
	}