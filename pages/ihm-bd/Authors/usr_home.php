<?php 
session_start();
if(!isset($_SESSION['id'])){
	
	 header('Location: ../../login.html'); 
	
	}
	
	
include_once("php/cnx.php");
$select = $conn->query("SELECT id,title,type,area,state, DATE_FORMAT(date, '%d %M') as date FROM article WHERE author=".$_SESSION['id']."");

?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Document sans nom</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="../../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/font-awesome.css" type="text/css" />
<link href="https://cdn.datatables.net/1.10.10/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/cssboot.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9]>

  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

<![endif]-->

</head>

<body>
<input type="hidden" id="ident" value="<?php echo $_SESSION['id'] ?>"/>

<div class="container-fluid">
<div class="col-lg-12">
		<nav class ="navbar navbar-inverse">
        <div class ="navbar-header ">
 <a class ="navbar-brand " href ="#">AJAM </a>
</div>
			<ul class ="nav navbar-nav ">
            <li class="divider"></li>
				<li class =" active "> <a href ="#"> Home </a> </li >
				<li> <a href ="#">Ethics </a> </li >
				<li> <a href ="#">Author Guidelines</a> </li >
				<li> <a href="../../../php/log_out.php" id="log-out">Log out</a> </li >
			</ul>
		<form class ="navbar-form pull-right ">
			<input type ="text" style =" width : 150px " class ="input-sm form-control " placeholder =" Recherche ">
			<button type ="submit" class ="btn btn-primary btn-sm">
		<i class ="fa   fa-search fa-1x "></i>&nbsp;  Chercher </button>
 		</form>
 		</nav>
        </div>
	</div>
<div class="container-fluid">
         <div class="col-xs-3">
         <div class="col-sm-12"><div id="detaille">
           
             <?php echo"<p>".$_SESSION['title']." ".$_SESSION['fname']." ".$_SESSION['lname']."</p><label>Degree:</label>".$_SESSION['grade'].""; ?>
         
       
         
         </div></div>
                 <div class="col-sm-12">  
         		<div class="panel panel-info">
          			
            	<div class="panel-heading">
           				 <h3 class="panel-title text-center"><i class ="fa  fa-file-text-o fa-1x "></i>&nbsp;Articles</h3>
          		</div>
                <div class="list-group">
           			 <a href="#" id="track" class="list-group-item">
            			<i class ="fa   fa-search fa-2x "></i>&nbsp; Track Paper
             		 
            		</a>
                     <a href="submission.php" target="_blank" class="list-group-item">
            			<i class ="fa    fa-upload fa-2x "></i>&nbsp; &nbsp;Submit
             		 
            		</a>
            
            	</div>
                <div class="panel-heading">
           				 <h3 class="panel-title text-center"><i class ="fa  fa-envelope fa-1x "></i>&nbsp;Messages</h3>
          			</div>
        		<div class="list-group">
           			 <a href="#" class="list-group-item" id="inbox">
            		<i class ="fa  fa-inbox fa-2x "></i>	  &nbsp;Inbox
             		 
            		</a>
                    <a href="#"  class="list-group-item" id="contact">
            			  <i class ="fa  fa-envelope fa-2x "></i>&nbsp;Contact us
             		 
            		</a>
            
            	</div>
                <div class="panel-heading">
           				 <h3 class="panel-title text-center"><i class ="fa fa-user fa-1x"></i>&nbsp;Profile</h3>
          		</div>
                <a href="#" class="list-group-item" id="edit">
            			<i class ="fa  fa-edit fa-2x "></i>&nbsp; Edit Informations
             		 
            		</a>
                    
          </div>
        </div></div>

<div class ="col-xs-9">
<div id="chargement"><img src="images/ajax-loader.gif" alt="" id="charg" /></div>
<div id="contenu">
<?php 
if ($select->num_rows!=0) {
	echo "
<div id=\"table_contenu\">
<table id=\"table\" class=\"table table-striped table-bordered\" cellspacing=\"0\" width=\"100%\">
 <thead>
            <tr>
                <th>ID</th>
                <th>TITLE</th>
                <th>TYPE</th>
                <th>AREA</th>
                <th>DATE</th>
                <th>STATU</th>
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
                <td>". $row['state']."</td>
            </tr>
  ";
	
	
	}	
echo'</tbody>
</table></div>';


}else{
	echo"
	
	
	";
	
}
?>
</div>
 </div>  

  <footer class="row col-sm-12">
        <div class="panel panel-body">
          <p class="text-center">Copyright &copy; 2015 - All Rights Reserved - <a href="http://www.csc.dz">(CRTI)</a></p>
        </div>
      </footer>
</div>
<script src="../../../jquery/jquery-2.1.3.js"></script>
<script src="../../../bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.10/js/dataTables.bootstrap.min.js"></script>
<script>
$(document).ready(function() {
	ident=parseInt($('#ident').val());
    $('#table').DataTable(  ); 
	$("#chargement").hide();
	$("#inbox").click(function(){
		
		$("#table_contenu").remove();
		  
		$("#chargement").show();
		$.ajax({
								
								
								type:"POST",
								url:"php/res_inbox.php",
								data: {id:ident },async:false,
								success:function(data)
								{
									$("#chargement").hide();
									
									$("#contenu").append(data);
									
									
									$('#table').DataTable();



									}});
		});
	
	$("#track").click(function(){
		
		$("#table_contenu").remove();
		  
		$("#chargement").show();
		$.ajax({
								
								
								type:"POST",
								url:"php/restrack.php",
								data: {id:ident },async:false,
								success:function(data)
								{
									$("#chargement").hide();
									
									$("#contenu").append(data);
									
									
									$('#table').DataTable();
									
$('.lien').on('click', function(e) {
										e.stopPropagation();
										$("#table_contenu").remove();
		  
										$("#chargement").show();
									id=parseInt($('td:nth-child(1)',$(this).closest('tr')).text());
									$.ajax({
								
								
								type:"POST",
								url:"php/detaille_track.php",
								data: {id:id },async:false,
								success:function(data)
								{
									$("#chargement").hide();
									
									$("#contenu").append(data);
									
									
									



									}});	
										
 return false;
});


									}});
		});
	
	
	
	
	$("#contact").click(function(){
	
	$("#table_contenu").remove();
		  
		$("#chargement").show();
	$.ajax({
		type:"POST",
		url:"php/cantact.php",
		success:function(data)
								{
									$("#chargement").hide();
									
									$("#contenu").append(data);
						$('#envoyer').on('click', function(e) {
							
							 textarea=$('#textarea').val();
							 title =$('#text').val();
							e.stopPropagation(e);
							$("#table_contenu").remove();
							$("#chargement").show();
							$.ajax({
								
								
								type:"POST",
								url:"php/envoi_msg.php",
								data: {id:ident,msg:textarea,title:title },async:false,
								success:function(data)
								{
									$("#chargement").hide();
									
									$("#contenu").append(data);
									
									
									



									}});
							
							
							
							 return false;
							 
							 
							 
							 
							 

});
}
		
		});
	});

$("#edit").click(function(){
		
		$("#table_contenu").remove();
		  
		$("#chargement").show();
		$.ajax({
								
								
								type:"POST",
								url:"php/edit_profile.php",
								data: {id:ident },async:false,
								success:function(data)
								{
									$("#chargement").hide();
									
									$("#contenu").append(data);
									
									$('#submit-edit').on('click', function(e) {
										e.stopPropagation(e);
										affiliation=$('#affiliation').val();
										$.ajax({
								type:"POST",
								url:"php/update_profile.php",
								data: {affiliation:affiliation,adresse:$('#adresse').val(),city:$('#city').val(),state:$('#state').val(),contry:$('#contry').val(),pcode:$('#pcode').val(),Phone:$('#Phone').val(),fax:$('#fax').val() },async:false,
								success:function(data)
								{
									$("#table_contenu").remove();
									$("#contenu").append(data);
									
									}});return false;
										
										
										
										
										});
									



									}});
		});
		$('.lien').on('click', function(e) {
										e.stopPropagation();
										$("#table_contenu").remove();
		  
										$("#chargement").show();
									id=parseInt($('td:nth-child(1)',$(this).closest('tr')).text());
									$.ajax({
								
								
								type:"POST",
								url:"php/detaille_track.php",
								data: {id:id },async:false,
								success:function(data)
								{
									$("#chargement").hide();
									
									$("#contenu").append(data);
									
									
									



									}});	
										
 return false;
});
$('ul li a').click(

			function(e) {
				
				 // stop the click from bubbling
				$(this).closest('ul').find('.active').removeClass('active');
				$(this).parent().addClass('active');
			});
} );
</script>
</body>
</html>
