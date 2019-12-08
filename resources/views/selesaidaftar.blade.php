<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, maximum-scale=1">

	<title>WELCOME!</title>
	<link rel="icon" href="unila.png" type="image/png">
	<link rel="shortcut icon" href="{{asset('/img/unila.png')}}" type="img/png">

	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

	<link href="csss/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="csss/style.css" rel="stylesheet" type="text/css">
	<link href="csss/font-awesome.css" rel="stylesheet" type="text/css">
	<link href="csss/responsive.css" rel="stylesheet" type="text/css">
	<link href="csss/magnific-popup.css" rel="stylesheet" type="text/css">
	<link href="csss/animate.css" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="jss/jquery.1.8.3.min.js"></script>
	<script type="text/javascript" src="jss/bootstrap.js"></script>
	<script type="text/javascript" src="jss/jquery-scrolltofixed.js"></script>
	<script type="text/javascript" src="jss/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="jss/jquery.isotope.js"></script>
	<script type="text/javascript" src="jss/wow.js"></script>
	<script type="text/javascript" src="jss/classie.js"></script>
	<script type="text/javascript" src="jss/magnific-popup.js"></script>
	<script src="jss/contactform.js"></script>

	<!-- =======================================================
    Theme Name: Knight
    Theme URL: https://bootstrapmade.com/knight-free-bootstrap-theme/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
	======================================================= -->

</head>

<body>
	<header class="header" id="header">
		<!--header-start-->
		<div class="container">
			<figure class="logo animated fadeInDown delay-07s">
				<a href="#"><img src="img/unila.png" alt=""></a>
			</figure>
			<h1 class="animated fadeInDown delay-07s">Welcome To  </br> Pelatihan Proyek Teknologi Infromasi</h1>
			<ul class="we-create animated fadeInUp delay-1s">
                <li>Silakan Bergabung Dengan Grup Whatsapp Pelatihan Proyek Teknologi Informasi </li> 
                
                
            </ul>
            <div class="links">
                    @if(auth()->check())
                    <a class="link animated fadeInUp delay-1s servicelink" href="https://chat.whatsapp.com/KxFfxSzdMPbAxhS4aBt3d5">WhatsApp</a>
                    <a class="link animated fadeInUp delay-1s servicelink" href="/logout">Logout</a>
                    @else
                    <a href="{{ url('/') }}">
                    @endif
                </div>
			 
		</div>
	</header>
	<!--header-end-->

	

</body>

</html>
