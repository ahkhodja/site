<html>
<head>
<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>AJAM | Editor-in-Chief </title>
		<link rel="stylesheet" href="css/personel_space.css" type="text/css" />
        <link rel="stylesheet" href="css/styles.css" type="text/css" />
        <script src="../../../jquery/jquery-2.1.3.js"></script>
        <script src="js/EChome.js"></script>
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
	
		<img src="profil.png"  width="26px" height="26px"><a href="#">Welcome Mr. Aourag
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
<div id="content">

	<ul class="menu">
		<li class="item1"><a href="#">Article befor revision <span>340</span></a>
			<ul>
			  <li class="subitem1"><a href="#"id="hold" >Hold<span>14</span></a></li>
			  <li class="subitem2"><a href="#"> Accessioned<span>6</span></a></li>
				<li class="subitem3"><a href="#">rejected<span>2</span></a></li>
			</ul>
		</li>
		<li class="item2"><a href="#">Article in revision <span>147</span></a>
			<ul>
				<li class="subitem1"><a href="#">Article in revision<span>14</span></a></li>
				
				
		  </ul>
		</li>
		<li class="item3"><a href="#">Article after revision<span>340</span></a>
			<ul>
				<li class="subitem1"><a href="#">Article rejcted<span>14</span></a></li>
				<li class="subitem2"><a href="#">Accepted article<span>6</span></a></li>
				<li class="subitem3"><a href="#">Article in publishing<span>2</span></a></li>
			</ul>
		</li>
		<li class="item4"><a href="#">INBOX<span>222</span></a>
			<ul>
				<li class="subitem1"><a href="#">Messages<span>14</span></a></li>
				<li class="subitem2"><a href="#">Compose<span>6</span></a></li>
			</ul>
		</li>
	</ul>

</div>

<div id="corp">
<div id="contenu"></div>


</div>


</body>

     <!-- --------------------------------------------------------- Footer----------------------------------------------------------------- -->
  <div id="footer">
    <p>copyright &copy; 2015 - All Rights Reserved - <a href="http://www.csc.dz">(CSC)</a></p>
    
  </div>
   <!-- ---------------------------------------------------------end footer----------------------------------------------------------------- -->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul > li');
	    
	   // menu_ul.hide();
	
	    menu_ul.click(function(e) {
	        e.preventDefault();
	        //$(this).
	    });
	
	});
	$("#hold").click(function(){
	$.ajax({
								
								
								type:"POST",
								url:"php/resultat.php",
								data: {pseudo: "new"},
								success:function(data)
								{
									$("#principale").remove();
									$("#contenu").after(data);
									}});
	
	
	
	
	});
</script>

</body>
</html>