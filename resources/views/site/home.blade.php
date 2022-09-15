@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
	<div id="conteudo" class="row"> <!--Conteudo de cada pagina-->
		<div class="slider">
			<ul class="slides">
				<li>
					<img src="img/banner01.png"> <!-- random image -->
					<div class="caption center-align">
						<h5 class="light grey-text text-lighten-3">Bem vindos a Faetec.</h5>
					</div>
				</li>
				<li class="hide-on-med-and-down">
					<img src="img/banner02.jpg"> <!-- random image -->
					<div class="caption left-align">
					</div>
				</li>
				<li class="hide-on-med-and-down">
					<img src="img/banner03.jpg"> <!-- random image -->
					<div class="caption right-align">
				</div>
				</li>
					<li class="hide-on-med-and-down">
					<img src="img/banner05.jpg" > <!-- random image -->
					<div class="caption center-align">
				</div>
				</li>
			</ul>
		</div>
		<div class="row">

				<div class="col s12 m6">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Sobre o sistema.</span>
							<p>SO projeto do mapa presencial tem o principal
									fundamento controlar a entrada e saída dos
									alunos na instituição, garantindo controle,
									segurança dos mesmos e</p>
						</div>
						<div class="card-action">
							<a href="{{route ('site.sobre')}}">Siba mais...</a>
						</div>
					</div>
				</div>

				<div class="col s12 m6">
					<div class="card blue-grey darken-1">
						<div class="card-content white-text">
							<span class="card-title">Conheça a Unidade</span>
							<p>A Unidade da FAETEC ETE - Amaury Cesar Vieira
									entá localiza na Rua 1015, s/n, Volta Grande II,
									Volta Redonda/RJ. É composta de 4 prédios...
									e oferece</p>
						</div>
						<div class="card-action">
							<a href="{{route ('site.unidade')}}">Siba mais...</a>
						</div>
					</div>
				</div>

		</div>
		<!--Final Atalhos sobre e unidade -->
	</div><!--Fim do Conteudo de cada pagina-->
@endsection

		
	
		
