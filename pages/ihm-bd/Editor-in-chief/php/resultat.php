<?php 
include_once("cnx.php");
$select = $conn->query("SELECT id,article,file, date FROM state_editor_chef  WHERE etat='new'");
echo "<table width=\"100%\" id=\"principale\">
  <tbody>";
if ($select->num_rows!=0) {
      
	  
	  while($row = $select->fetch_assoc()){
	 
	       $select2=$conn->query("SELECT title,author FROM article  WHERE id=".$row['article']."");
		    $select3=$conn->query("SELECT url FROM file  WHERE id=".$row['file']."");
			
	       $row2= $select2->fetch_assoc();
		   $row3= $select3->fetch_assoc();
		   $select4=$conn->query("SELECT fname,lname FROM personne  WHERE id=".$row2['author']."");
		     $row4= $select4->fetch_assoc();




echo "
    <tr>
      <td width=\"29\" height=\"10\"><input type=\"checkbox\" name=\"checkbox\" id=\"checkbox\">
       </td>
      <td width=\"197\"><h4>". $row2['title']."</h4></td>
      <td width=\"104\"align=\"right\">".$row4['fname']." ".$row4['lname']."</td>
      <td width=\"38\" align=\"right\">".$row['date']."</td>
      <td width=\"24\" align=\"right\">&nbsp;</td>
    </tr>
  ";


}


}else
   echo'<td align="center"><h4>Aucun Resultat...</h4></td>';

{
echo'</tbody>
</table>';	
	
	
	
	
	
	
	}



?>