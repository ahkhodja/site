// JavaScript Document
$("#tableau").click(function(){
	$.ajax({
								
								
								type:"POST",
								url:"/php/resultat.php",
								data: {pseudo: "new"},
								success:function(data)
								{
									$("#corp").after(data);
									}});
	
	
	
	
	});