<!DOCTYPE html> 
<html> 
<head>
	<title>Vertical Menu</title> 
	<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css' />
	<script type="text/javascript" src="jquery/jquery-2.1.3.js" /></script>
	
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.min.css" rel="stylesheet" />
	<!--[if IE 7]>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome-ie7.min.css" rel="stylesheet" />
	<![endif]-->
		
	<script>
	$(document).ready(function() {
		$('ul.form li a').click(
			function(e) {
				e.preventDefault(); // prevent the default action
				e.stopPropagation; // stop the click from bubbling
				$(this).closest('ul').find('.selected').removeClass('selected');
				$(this).parent().addClass('selected');
			});
	});
	</script>	
	<style>
	body {
	margin: 0;
	padding: 0;
	font-family: Quicksand;
	font-weight: 700;
	border-top: 1px solid #000000;
	}

	ul.form {
	position: relative;
	background: #fff;
	width: 250px;
	margin: auto;
	padding: 0;
	list-style: none;
	overflow: hidden;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
	box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.1);
	}

	.form li a {
		width:225px;
		padding-left:20px;
		height:50px;
		line-height:50px;
		display:block;
		overflow:hidden;
		position:relative;
		text-decoration:none;
		text-transform:uppercase;
		font-size:14px;
		color:#686868;
		
		-webkit-transition:all 0.2s linear;
		-moz-transition:all 0.2s linear;
		-o-transition:all 0.2s linear;
		transition:all 0.2s linear;			
	}

	.form li a:hover {
		background:#efefef;
	}

	

	
		
	

		

	.form li:first-child a:hover, .form li:first-child a {
		-webkit-border-radius: 5px 5px 0 0;
		-moz-border-radius: 5px 5px 0 0;
		border-radius: 5px 5px 0 0;
	}

	.form li:last-child a:hover, .form li:last-child a {
		-webkit-border-radius: 0 0 5px 5px;
		-moz-border-radius: 0 0 5px 5px;
		border-radius: 0 0 5px 5px;
	}

	.form li a:hover i {
		color:#ea4f35;
	}

	.form i {
		margin-right:15px;
		
		-webkit-transition:all 0.2s linear;
		-moz-transition:all 0.2s linear;
		-o-transition:all 0.2s linear;
		transition:all 0.2s linear;	
	}

	.form em {
		font-size: 10px;
		background: #ea4f35;
		padding: 3px 5px;
		-webkit-border-radius: 10px;
		-moz-border-radius: 10px;
		border-radius: 10px;		
		font-style: normal;
		color: #fff;
		margin-top: 17px;
		margin-right: 15px;
		line-height: 10px;
		height: 10px;		
		float:right;
	}

	.form li.selected a {
		background:#efefef;
		border-left: 5px solid #000000;
		
	}

	h1 {
		color:#fff;
		margin: 120px auto 40px;
		font-size:30px;
		width:300px;
		text-align:center;
	}
	.form .menu {
	border-top: 3px solid #000000;
	border-bottom-width: 3px;
	border-bottom-style: solid;
	text-align: center;
}
    </style>	
</head>

<body>
	
	
	<ul class="form">
    <li class="menu"> <p >Article befor revision</p><li>
		<li><a class="profile" href="#"><i class="icon-user"></i>Edit Profile</a></li>
       
		<li class="selected"><a class="messages" href="#"><i class="icon-envelope-alt"></i>Messages <em>5</em></a></li>
		<li><a class="settings" href="#"><i class="icon-cog"></i>App Settings</a></li>
		<li><a class="logout" href="#"><i class="icon-signout"></i>Logout</a></li>
	</ul>

</body>
</html>