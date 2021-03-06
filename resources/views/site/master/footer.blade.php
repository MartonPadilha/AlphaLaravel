<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Alpha - Automação de Sistemas Elétricos</title>
<link rel="shortcut icon" href="assets/images/favicon.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Painéis Elétricos Instalação Elétrica Instalações Elétricas Solução Elétrica Montagem de Paineis Montagem de Iluminação
Manutenção Elétrica Solução Fotovoltaica Energia Solar Painel Solar Elétrica para Armagenazem Elétrica para fabrica Cubículos de Energia
Alfa Alpha Alfa Ijui Alpha Ijui Projeto Elétrico Engenharia Elétrica" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{url(mix('site/css/bootstrap.css'))}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url(mix('site/css/myStyle.css'))}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{url(mix('site/css/scrollAnimation.css'))}}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{url(mix('site/css/style.css'))}}" type="text/css" media="all" />
<link rel="stylesheet" href="{{url(mix('site/css/flexslider.css'))}}" type="text/css" media="screen" property="" />
<!--// css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{url(mix('site/css/font-awesome.min.css'))}}" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- //font-awesome icons -->

<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script type="text/javascript" src="{{url(mix('site/js/jquery-2.1.4.min.js'))}}"></script>
<script src="{{url(mix('site/js/main.js'))}}"></script>
{{-- Carousel --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
</head>
<body>

    @yield('content')
    <!-- footer -->
	<div class="footer">
            <div class="container">
                <div class="agile_footer_copy">
                    <div class="w3agile_footer_grids">
                        <div class="col-md-4 w3agile_footer_grid">
                            <h3>Informações para Contato</h3>
                            <ul>
                                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Rua Augusto Fengler 427, Jardim. <span>Ijuí - RS</span></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">contato@alphaeletrica.ind.br</a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i>55 3332-1170</li>
                            </ul>
                        </div>
                        
                        <div class="col-md-6 w3agile_footer_grid">
                            <h3>Sobre nós</h3>
                            <p style="text-align: justify;">A Alpha foi fundada em 2009 iniciando suas atividades voltadas para a manutenção elétrica, onde
                            possui expertise nesse segmento. 
                            A partir de 2011 começou a fornecer soluções elétricas Turnkey para sistemas de armazenagem.
                            A partir de 2013 começou a trabalhar projetos com geração de energia e atuar segmento industrial.
                            Em 2014 foi ampliada da atuação em projetos e treinamentos.
                            Atualmente dispomos de uma abrangência completa nas soluções elétricas aos clientes para
                            atender as demandas de Automação e Energia;      
                        </p>
                        </div>
                        
                        <div class="col-md-2 w3agile_footer_grid w3agile_footer_grid1">
                            <h3>Navegação</h3>
                            <div class="col-md-1">
                                <ul>
                                    <li><span class="fa fa-home fa-lg" aria-hidden="true"></span></li>
                                    <li><span class="fa fa-bolt fa-lg" aria-hidden="true"></span></a></li>
                                    <li><span class="fa fa-wrench fa-lg" aria-hidden="true"></span></li>
                                    <li><span class="fa fa-comments fa-lg" aria-hidden="true"></span></a></li>
                                </ul>
                            </div>
                            <div class="col-md-1">
                                <ul>
                                    <li><a href="{{route('site.home')}}">Home</a></li>
                                    <li><a href="{{route('site.service')}}">Serviços</a></li>
                                    <li><a href="{{route('site.work')}}">Obras</a></li>
                                    <li><a href="{{route('site.contact')}}">Contato</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    <!-- //footer -->
    <!-- copy-right -->
        <div class="w3_agileits_copy_right_social">
            <div class="container">
                <div class="col-md-12 text-center agileits_w3layouts_copy_right">
                    <p>© <?php echo date('Y');?> Alpha Elétrica. Todos os direitos reservados | Desenvolvido por <a href="http://megasolucoesti.com/">Mega Soluções</a></p>
                </div>
                    <div class="clearfix"> </div>
            </div>
        </div>
    <!-- //copy-right -->
        <!-- //footer -->
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            autoplay:true,
            autoplayTimeout:4000,
            autoplayHoverPause:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
            })

					
        </script>
    <!-- jarallax -->
        <script src="{{url(mix('site/js/jarallax.js'))}}"></script>
        <script src="{{url(mix('site/js/SmoothScroll.min.js'))}}"></script>
        <script type="text/javascript">
            /* init Jarallax */
            $('.jarallax').jarallax({
                speed: 0.5,
                imgWidth: 1366,
                imgHeight: 768
            })
        </script>
        <!-- //jarallax -->
        <script src="{{url(mix('site/js/bootstrap.js'))}}"></script>
        <script src="{{url(mix('site/js/scrollAnimation.js'))}}"></script>
    <!-- //here ends scrolling icon -->
    </body>	
    </html>