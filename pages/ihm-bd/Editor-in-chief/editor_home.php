<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>AJAM | Editor-in-Chief </title>
		<link rel="stylesheet" href="css/personel_space.css" type="text/css" />
</head>
<body>
<div id="header">
<div id="navbar">
<div class="h_left">
					<ul>
      	  				<li class="active"><a href="editor_home.php"><h2>Home</h2></a></li>
        				<li><a href="#"><h2>Articles</h2></a>
                            <ul>
								<li><a href="papers_list.php">Submitted Articles </a></li>
            					<li><a href="assign_to-editor.html">Assign to Editor</a></li>
								<li><a href="track_paper.html">Track Articles</a></li>
          					</ul>
                        </li>
        				<li ><a href="#"><h2>Editors</h2></a>
							<ul>
            					<li><a href="associate_editors.html">Associate Editors</a></li>
            					<li><a href="add_editor.html">Add Editor</a></li>
								<li><a href="update_editors_list.html">Update Editors</a></li>
								<li><a href="editor_decision.html">Editor Approval</a></li>
          					</ul>
						</li>									
        				<li><a href="#"><h2>About</h2></a>
							<ul>
            					<li><a href="about_journal.html">The journal</a></li>
            					<li><a href="ethical_guidelines.html">Ethical Guidelines</a></li>
								<li><a href="editor_support.html">Site Support</a></li>
          					</ul>
						</li>
      				</ul>
					</div>
<div class="h_right">
<li class="h_right">
	<a href="#">
		<img src="profil.png"  width="26px" height="26px">
	</a>
	<ul>
    	<li><a href="account_informations.html">Change details</a></li>
    	<li><a href="login.html">Logout</a></li>
    </ul>
</li>
</div>
</div>
</div>
<div id="forme">
<h2 class="div-title">Welcome Mr. Aourag</h2>
</div>

<form id="forme">
<fieldset>
<h2>Article before revision</h2>
<div class="border">
<table id="table">
             				<tr>
       							<td>
         							<label for="on_hold">Article on hold  </label>
       							</td>
        						<td>
         							<label for="on_hold">( <a href="papers_list.php"><?php 
									$conn= new mysqli('localhost','root','','ajam');
if ($conn->connect_error) {
    die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
 $inser = $conn->query("SELECT COUNT(state_editor_chef.id) as compte

FROM
state_editor_chef
WHERE
state_editor_chef.etat = 'new' ");

	$row= $inser->fetch_assoc();
	echo $row['compte'];								
									
									
									
									
									?></a>  )</label>
       							</td>
        					</tr>              				
							<tr>
       							<td>
         							<label for="for_revision">Article accessioned </label>
       							</td>
        						<td>
         							<label for="for_revision">( <a href="assign_to-editor.html">4</a>  )</label>
       							</td>
        					</tr>
        					<tr>
       							<td>
         							<label for="rejected">Article rejected </label>
       							</td>
        						<td>
         							<label for="rejected">(  <a href="">1</a> )</label>
       							</td>
        					</tr>
					    </table>

</div>
<h2>Article in revision</h2>
<div class="border">
<table id="table">
             				     
        					<tr>
       							<td>
         							<label for="in_revision"> Article in revision </label>
       							</td>
        						<td>
         							<label for="in_revision">(  <a href="">0</a> )</label>
       							</td>
        					</tr>
</table>

</div>
<h2>Article after revision</h2>
<div class="border">
<table id="table">
             				     
        					<tr>
								<td>
         							<label for="rejected">Article rejected </label>
       							</td>
        						<td>
         							<label for="rejected">( <a href="">0</a>  )</label>
       							</td>
        					</tr>
							<tr>
       							<td>
         							<label for="accepted">Accepted article</label>
       							</td>
        						<td>
         							<label for="accepted">(  <a href="">0</a> )</label>
       							</td>
        					</tr>
							<tr>
       							<td>
         							<label for="in-publication">Article in publishing</label>
       							</td>
        						<td>
         							<label for="in-publication">(  <a href="">0</a> )</label>
       							</td>
        					</tr>
            				
      		           </table>

</div>
<br/>
</fieldset>

</form>

</body>

     <!-- --------------------------------------------------------- Footer----------------------------------------------------------------- -->
  <div id="footer">
    <p>copyright &copy; 2015 - All Rights Reserved - <a href="http://www.csc.dz">(CSC)</a></p>
    
  </div>
   <!-- ---------------------------------------------------------end footer----------------------------------------------------------------- -->

</body>
</html>