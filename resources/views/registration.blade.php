
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Macaron | Inscription</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="{{ secure_asset('css/styleRegistration.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<!-- //js -->
</head>
<body>
	<!-- banner --> 
<div class="video"> 
	<div class="center-container">
	    <div class="w3ls-agileinfo">
			<h1 style="color:black"> Inscription </h1>
		</div>
		 <div class="bg-agile">
			<h2>Votre Plateforme Macaron </h2>
			<div class="login-form">
				{!! Form::open(array('url' => 'inscriptions', 'method' => 'post','files' => 'true')) !!}
				{{ Form::text('nom',$nom = null, array('placeholder' => 'Nom')) }}
				{{ Form::text('prenom',$prenom = null, array('placeholder' => 'Prenom')) }}
				{{ Form::text('adresse',$adresse = null, array('placeholder' => 'Adresse')) }}
				{{ Form::text('email',$email = null, array('placeholder' => 'Email')) }}
				{{ Form::text('tel',$tel = null, array('placeholder' => 'Téléphone')) }}
				{{ Form::password('password',$password = null, array('placeholder' => 'Mot De Passe')) }}
				{{ Form::submit("S'inscrire") }}
				{!! Form::close() !!}
					</div>
			</div>	
		</div>
	<!-- //banner --> 
	 <!--copyright-->
		<div class="copy w3ls">
			<p style="color:black">© 2019 - <script>document.write(new Date().getFullYear());</script> Macaron. All rights reserved | Design by  Me</p>
	    </div>
	<!--//copyright-->
	</div>	
</div>	
</body>
</html>