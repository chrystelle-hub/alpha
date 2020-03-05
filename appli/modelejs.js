<div id="header"></div>
<div id="contenu"></div>
<div id="footer"></div>

<script src='../jquery-3.4.1.min.js' type='text/javascript'></script> 
<script type='text/javascript'>
var url= location.search;
var param = url.substr(1);
var tab = param.split('=');
var token=(tab[1]);

$(document).ready(function()
{
	$.ajax({
		url: "https://127.0.0.1:8000/testconnexion",
		type: 'POST',
		data:{
				"X-AUTH-TOKEN":token,
			},
		dataType: 'json',
		crossDomain: true, 
			
	}).done(function(data){
		if(data['login']==='ok')
		{
			$( "#header" ).load( "template2.html" );
		}	
		else
		{
			$( "#header" ).load( "template1.html" );
		}
	}).fail(function(){
		$( "#header" ).load( "template1.html" );
	}).always(function(){
//url a changer
     	$( "#contenu" ).load( "....html" , 
     		function()
     		{
     			//action spécifiques
     	
     		});

   	});
});



   
  </script>