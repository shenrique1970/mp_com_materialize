<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <title>Mapa - @yield('titulo')</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Criação de Sites e Aplicativos Mobile.">
    <meta name="keywords" content="Sribeiro,Sites">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Sergio Ribeiro">
    <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <!--Normalize-->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
    </head>

    <body>
        @include('app.layouts._partials.topo')
        @include('site.layouts._partials.modal2')
        @include('app.layouts._partials.modal3')
        @yield('conteudo')
        @include('site.layouts._partials.rodape')
    </body>
    	<!--Import jQuery before materialize.js-->
	<script type="text/javascript" src="materialize/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="materialize/js/materialize.min.js"></script>	  
	<script>
		$(document).ready(function(){
      		$('.carousel.carousel-slider').carousel({
    			fullWidth: true,
    			indicators: true
  			});
  			$('.slider').slider();
			$('.modal').modal();
			$(".button-collapse").sideNav();
    	});
	</script>
	
</body>
</html>
</html>
