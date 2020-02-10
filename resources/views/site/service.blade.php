@extends('site.master.layout')
@section('content')

<div class="jumbotron jumbotron-fluid" style="height: 40vh; background-image: url('{{asset('assets/images/1280x400/_MG_9537.jpg')}}')">
	<div class="container">
	</div>
  </div>

<div class="agile-prod">
		<div class="container">
			<h3 class="wthree_head">PRODUTOS E SOLUÇÕES</h3>
			<p class="agileits_w3layouts_para w3_agile_para">Oferecemos uma vasta gama de serviços na automação de sistemas elétricos.</p>
		
		<div class="agile-prod1">
			<div class="col-md-6 agile-sub">
				<h4>PAINÉIS ELÉTRICOS</h4>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Painéis de Comando de motores (CCM)</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Painéis Sinóticos (CCM-S)</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Painéis Gerais de Baixa Tensão (QGBT)</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Painéis de Automação / Especiais</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Painéis de Banco de Capacitores</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Painéis de MT de 15 KV até 36 kV</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Painéis TTA</li>
				</ul>
			</div>
			<div class="col-md-6 agile-sub" style="background-image: url(assets/images/640x425/_MG_9499.jpg)">
				<div class="text-opacity">
					<h4>PAINÉIS ELÉTRICOS</h4>
					<ul>
						@for ( $i = 0; $i < 7; $i++)
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i></li>						
						@endfor
					</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	

		<div class="agile-prod1">
			<div class="col-md-6 agile-sub" style="background-image: url(assets/images/640x425/_MG_9499.jpg)">
				<div class="text-opacity">
					<h4>INSTALAÇÕES ELÉTRICAS E MECÂNICAS</h4>
					<p>Agroindustriais</p>
					<ul>
						@for ( $i = 0; $i < 6; $i++)
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i></li>						
						@endfor
					</ul>
				</div>
			</div>
			<div class="col-md-6 agile-sub">
				<h4>INSTALAÇÕES ELÉTRICAS E MECÂNICAS</h4>
				<p>Agroindustriais</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Movimentação de Grãos</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Armazenagem, Termometria e AeraçãoPellentesque auctor</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Beneficiamento de Sementes</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Obras para alimentação elétrica de Irrigação</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Obras Portuárias</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Instalações à prova de explosão</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="agile-prod1">
			<div class="col-md-6 agile-sub">
				<h4>INSTALAÇÕES ELÉTRICAS E MECÂNICAS</h4>
				<p>Industriais</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Alimentícios</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Construtoras</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Fábrica de Rações</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Fertilizantes</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Frigoríficos</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Petroquímico</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Siderúrgico</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Tratamento de água e afluentes</a></li>
				</ul>
			</div>
			<div class="col-md-6 agile-sub" style="background-image: url(assets/images/640x425/_MG_9465.jpg)">
				<div class="text-opacity">
						<h4>INSTALAÇÕES ELÉTRICAS E MECÂNICAS</h4>
						<p>Industriais</p>
						<ul>
							@for ( $i = 0; $i < 8; $i++)
								<li><i class="fa fa-arrow-right" aria-hidden="true"></i></li>						
							@endfor
						</ul>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="agile-prod1">
			<div class="col-md-6 agile-sub" style="background-image: url(assets/images/640x425/_MG_9465.jpg)">
				<div class="text-opacity">
					<h4>GERAÇÃO DE ENERGIA</h4>
					<ul>
						@for ( $i = 0; $i < 4; $i++)
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i></li>						
						@endfor
					</ul>
				</div>
			</div>
			<div class="col-md-6 agile-sub">
				<h4>GERAÇÃO DE ENERGIA</h4>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Soluções Fotovoltaicas - ENERGIA SOLAR</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Geradores de gás, diesel e biogás</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Pequenas centrais hidroelétricas (PCH’s)</a></li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Usinas Termo Elétricas (UTE’s)</a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="agile-prod1">
				<div class="col-md-6 agile-sub">
					<h4>COMERCIAIS</h4>
					<ul>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Automação</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Central de distribuição (CDs) </a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Centros de TI e data centers</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Escritórios</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Supermercados/ Shoppings</a></li>
					</ul>
				</div>
				<div class="col-md-6 agile-sub" style="background-image: url(assets/images/640x425/_MG_9465.jpg)">
					<div class="text-opacity">
						<h4>COMERCIAIS</h4>
						<ul>
							@for ( $i = 0; $i < 5; $i++)
								<li><i class="fa fa-arrow-right" aria-hidden="true"></i></li>						
							@endfor
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="agile-prod1">
					<div class="col-md-6 agile-sub" style="background-image: url(assets/images/640x425/_MG_9465.jpg)">
						<div class="text-opacity">
							<h4>MANUTENÇÃO, SERVIÇOS, PÓS VENDAS E TREINAMENTOS</h4>
							<ul>
								@for ( $i = 0; $i < 6; $i++)
									<li><i class="fa fa-arrow-right" aria-hidden="true"></i></li>						
								@endfor
							</ul>
						</div>
					</div>
					<div class="col-md-6 agile-sub">
						<h4>MANUTENÇÃO, SERVIÇOS, PÓS VENDAS E TREINAMENTOS</h4>
						<ul>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Gestão de Energia - redução significativa na manutenção corretiva</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Assistência técnica em painéis e instalações elétricas</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Laudos técnicos</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Acompanhamentos das condições da obra (Pós Vendas)</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Termografia e Análise de Energia</a></li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="#">Análise e Laudos de condições de fornecimento de Energia</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
	</div>
</div>
@endsection