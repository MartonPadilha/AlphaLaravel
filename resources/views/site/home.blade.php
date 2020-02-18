@extends('site.master.footer')
@section('content')
<!-- banner -->
<div class="container-fluid">
<div class="banner jarallax">
<div class="agileinfo-dot">
			<div class="w3ls-banner-info-bottom">
				<div class="container">
					<div class="banner-address">
						<div class="banner-address-left">
							<p><i class="fa fa-map-marker" aria-hidden="true"></i>  Rua Augusto Fengler 427, Jardim. Ijuí - RS</p>
						</div>
						
						<div class="banner-address-left right">
							<p><i class="fa fa-phone" aria-hidden="true"></i>  55 3332-1170

                            </p>
						</div>
						
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>

			<div class="header row">
				<div class="container">
					<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left col-md-6">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">
						<img src="{{asset('assets/images/logo/Versão principal - colorida.png')}}" alt="">
					</a>
				</div>

				<div class="collapse navbar-collapse navbar-right col-md-6" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li class={{(Route::current()->getName() === 'site.home' ? 'active' : '')}}><a href="{{route('site.home')}}">Home</a></li>
							<li class={{(Route::current()->getName() === 'site.service' ? 'active' : '')}}><a href="{{route('site.service')}}">Serviços</a></li>
							<li class={{(Route::current()->getName() === 'site.work' ? 'active' : '')}}><a href="{{route('site.work')}}">Obras</a></li>
							<li class={{(Route::current()->getName() === 'site.contact' ? 'active' : '')}}><a href="{{route('site.contact')}}">Contato</a></li>
							<li><a href="https://webmail.kinghost.com.br/" target="_blank">E-mail</a></li>
						</ul>
						<div class="clearfix"> </div>
					</nav>
				</div>
			</nav>
				</div>
			</div>

			
			<div class="w3layouts-banner">
				<div class="container-fluid">
					<section class="slider">
						<div class="flexslider" style="height: 50vh">
							<ul class="slides">
								<li style="background-image: url('{{asset('assets/images/1280x800/esc.jpg')}}'); height: 70vh;">
									<div class="agileits_w3layouts_banner_info">
										<h3>SERVIÇOS ELÉTRICOS</h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
									<div class="clearfix"> </div>
								</li>
								<li style="background-image: url('{{asset('assets/images/1280x800/_MG_9512_esc.jpg')}}'); height: 70vh;">
									<div class="agileits_w3layouts_banner_info" ba>
										<h3>SEGURANÇA NA SUA EMPRESA</h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
									<div class="clearfix"> </div>
								</li>
								<li style="background-image: url('{{asset('assets/images/1280x800/_MG_9552_esc.jpg')}}'); height: 70vh;">
									<div class="agileits_w3layouts_banner_info">
										<h3>FERRAMENTAS E EQUIPAMENTOS ESPECIALIZADOS</h3>
										<p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
									</div>
									<div class="clearfix"> </div>
								</li>
							</ul>
						</div>
				</section>
			<!-- flexSlider -->
            <script defer src="{{url(mix('site/js/jquery.flexslider.js'))}}"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->

				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	
	<!-- services -->
<div class="services" style="margin-top: 100px">
		<div class="container">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">ÁREAS DE ATUAÇÃO</h3>
				<p class="agileits_w3layouts_para w3_agile_para">Dispomos de uma abrangência completa em soluções elétricas.</p>
			</div>
			<div class="w3layouts_skills_grids w3layouts_featured_services_grids">
			<div class="col-md-6 w3_featured_services_right">
					<img src="http://alphaeletrica.ind.br/AlphaLaravel/public/assets/images/640x425/_MG_9537.jpg" alt=" " class="img-responsive" style="background-size: cover; border-radius: 10px">
				</div>
				<div class="col-md-3 w3_featured_services_left">
					<div class="w3_featured_services_left_grid">
							<div class="col-xs-4 w3_featured_services_left_gridl">
								<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
									<i class="hi-icon fa-industry"> </i>
								</div>
							</div>
							<div class="col-xs-8 w3_featured_services_left_gridr">
								<h4>Industrial</h4>
							</div>
							<div class="clearfix"> </div>
						</div>

					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-lightbulb"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>Geração de Energia</h4>
						</div>
						<div class="clearfix"> </div>
					</div>
					
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-bolt"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>Agroindustrial</h4>
						</div>
						<div class="clearfix" style="margin-bottom: 50px"> </div>
					</div>

					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-building"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>Comercial</h4>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>

				<div class="col-md-3 w3_featured_services_left">	
					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-cogs"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>Manutenção</h4>
						</div>
						<div class="clearfix"> </div>
					</div>

					<div class="w3_featured_services_left_grid">
						<div class="col-xs-4 w3_featured_services_left_gridl">
							<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
								<i class="hi-icon fa-map"> </i>
							</div>
						</div>
						<div class="col-xs-8 w3_featured_services_left_gridr">
							<h4>Projetos</h4>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //services -->
	
	{{-- acting  --}}
<div class="map">
		<div class="container">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">ÁREAS DE ATENDIMENTO</h3>
			</div>
			<div class="w3layouts_skills_grids w3layouts_featured_services_grids">
				<div class="col-md-6 w3_featured_services_right">
					<div class="agile-sub-map">
						<h3>REGIÃO SUL</h3>
						<ul>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> RS</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> SC (Oeste)</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> PR</li>
						</ul>
						<h3>REGIÃO NORTE</h3>
						<ul>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> TO - Com escritório em Palmas</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> PA - Com escritório em Dom Eliseu</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> MA</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> BA</li>
						</ul>
						<p>Demais regiões e estados, atendimento sob demanda.</p>
					</div>
				</div>
				
				<div class="col-md-6 w3_featured_services_left">
					<img src="{{asset('assets/images/services/mapa.jpg')}}" alt=" " class="img-responsive" style="background-size: cover; border-radius: 10px">
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>


	<!-- values -->

	<div class="banner-bottom">
		<div class="container">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">Nossa Política</h3>
				<p class="agileits_w3layouts_para w3_agile_para">Nossos objetivos básicos e irrenunciáveis.</p>
			</div>
			
			<div class="agileits_banner_bottom_grid_three">
				<div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
					<div class="wthree_banner_bottom_grid_three_left1 grid values-w3grids">
                        <div class="ser-agile">
                            <div class="values-icon hvr-radial-in">
                                <i class="fa fa-anchor" aria-hidden="true"></i>
                            </div>
                            <h4>Missão</h4>
                            <p class="w3_agileits_para">Oferecer a melhor solução em automação elétrica com padrão de qualidade superior, otimizando os investimentos do cliente na construção de obras comerciais, industriais e residenciais.</p>
                        </div>
					</div>
				</div>
				<div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
					<div class="wthree_banner_bottom_grid_three_left1 grid values-w3grids">
                        <div class="ser-agile">
                            <div class="values-icon hvr-radial-in">
                                <i class="fa fa-line-chart" aria-hidden="true"></i>
                            </div>
                            <h4>Visão</h4>
                            <p class="w3_agileits_para">Ser referência de qualidade em automação elétrica com padrão diferenciado no atendimento ao cliente, ter política de preços competitivos, com rigoroso cumprimento dos prazos estabelecidos.</p>
                        </div>
					</div>
				</div>
				<div class="col-md-4 agileinfo_banner_bottom_grid_three_left">
					<div class="wthree_banner_bottom_grid_three_left1 grid values-w3grids">
						<div class="ser-agile">
                            <div class="values-icon hvr-radial-in">
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>
                            </div>
                            <h4>Valores</h4>
                            <p class="w3_agileits_para">Satisfação do cliente. Ele é a razão da existência de qualquer negócio.<br> Valorização e respeito às pessoas<br> São as pessoas o grande diferencial que torna tudo possível.</p>
                        </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	{{-- partners --}}
	<style>
	.itemCarousel {
    	/* background-image: url('assets/images/partners/abb.png'); */
			background-size: contain;
			background-position: center;
			background-repeat: no-repeat;
			width: 200px;
			height: 150px;
		}

	.wrapper {
    width: 100%;
    height: auto;
    overflow: hidden;
}
	</style>
	<div class="wrapper">
		<div class="container">
			<div class="agileits_heading_section">
				<h3 class="wthree_head">PARCEIROS</h3>
				<p class="agileits_w3layouts_para w3_agile_para">A Alpha preocupa-se com a qualidade das suas soluções, e para isso é importante ter parceiros e
					fornecedores que nos garantam produtos de qualidade e engenharia compartilhada.</p>
			</div>
			
			<div class="owl-carousel owl-theme">
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/abb.png')}}')"></div>
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/corfio.png')}}')"></div>
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/elecon.png')}}')"></div>
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/nexans.png')}}')"></div>
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/opcao.png')}}')"></div>
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/phoenix.gif')}}')"></div>
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/qt.png')}}')"></div>
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/sil.png')}}')"></div>
				<div class="itemCarousel" style="background-image: url('{{asset('assets/images/partners/weg.png')}}')"></div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>




<!-- stats -->
	<div class="stats" style="background-image: url('{{asset('assets/images/1280x400/_MG_9552_esc.jpg')}}'); background-position: center;">
		<div class="container">
			<div class="col-md-3 w3_counter_grid">
				<div class="w3_agileits_counter_grid">
					<i class="fa fa-umbrella" aria-hidden="true"></i>
				</div>
				<p class="counter">10</p>
				<h3>Anos no Mercado</h3>
			</div>
			<div class="col-md-3 w3_counter_grid">
				<div class="w3_agileits_counter_grid">
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
				<p class="counter">700</p>
				<h3>Obras Realizadas</h3>
			</div>
			<div class="col-md-3 w3_counter_grid">
				<div class="w3_agileits_counter_grid">
					<i class="fa fa-comments" aria-hidden="true"></i>
				</div>
				<p class="counter">350</p>
				<h3>Clientes Atendidos</h3>
			</div>
			<div class="col-md-3 w3_counter_grid">
				<div class="w3_agileits_counter_grid">
					<i class="fa fa-book" aria-hidden="true"></i>
				</div>
				<p class="counter">12</p>
				<h3>Estados Atendidos</h3>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //stats -->
<!-- stats -->
	<script src="{{url(mix('site/js/jquery.waypoints.min.js'))}}"></script>
	<script src="{{url(mix('site/js/jquery.countup.js'))}}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- comments -->

<div class="agileits_heading_section">
	<h3 class="wthree_head">DEPOIMENTOS</h3>
	<p class="agileits_w3layouts_para w3_agile_para">Veja oque nossos clientes pensam sobre nós</p>
</div>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" data-interval="10000">
	<div class="carousel-inner">
	  <div class="carousel-item item container active">
			<p class="text-center comment"><span class="fa fa-quote-left s4" aria-hidden="true"></span> A Alpha Elétrica é uma ótima empresa! Valoriza o cliente e presta todo suporte necessário.</p>
					<div class="people">
						<hr>
						<h5 class="mb-2">José Carlos</h5>
						<p>Gerente de Produção - Coca-Cola</p>
					</div>
			</div>
		<div class="carousel-item item container">
			<p class="text-center comment"><span class="fa fa-quote-left s4" aria-hidden="true"></span> É uma empresa que transmite responsablidade, conhecimento e faz de tudo para o sucesso do serviço.</p>
			<div class="people">
					<hr>
					<h5 class="mb-2">Maria Coelho</h5>
					<p>Analista de RH - GT Comunicações</p>
			</div>
			</div>
		<div class="carousel-item item container">
				<p class="text-center comment"><span class="fa fa-quote-left s4" aria-hidden="true"></span> Empresa Fantástica! Não mede esforços para bem atender os clientes.</p>
				<div class="people">
						<hr>
						<h5 class="mb-2">Rodrigo Cristiano Konrad</h5>
						<p>Vendedor - Local Guide</p>
					</div>
				</div>
		</div>
	</div>
</div>

    <!-- //comments -->
@endsection