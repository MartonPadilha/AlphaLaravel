@extends('site.master.layout')
@section('content')
<style>
	.agile-sub{
		background-size: cover;
		background-repeat: no-repeat
	}
</style>

<div class="jumbotron jumbotron-fluid" style="height: 40vh; background-image: url('{{asset('assets/images/1280x400/_MG_9537.jpg')}}')">
	<div class="container">
	</div>
  </div>

<div class="agile-prod">
		<div class="container">
			<h3 class="wthree_head">PRODUTOS E SOLUÇÕES</h3>
			<p class="agileits_w3layouts_para w3_agile_para">Oferecemos uma vasta gama de serviços na automação de sistemas elétricos.</p>
		
		<div class="agile-prod1" id="electrical-panels">
			<div class="col-md-6 agile-sub">
				<h4>PAINÉIS ELÉTRICOS</h4>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Painéis de Comando de motores (CCM)</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Painéis Sinóticos (CCM-S)</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Painéis Gerais de Baixa Tensão (QGBT)</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Painéis de Automação / Especiais</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Painéis de Banco de Capacitores</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Painéis de MT de 15 KV até 36 kV</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Painéis TTA</li>
				</ul>
			</div>
			<div class="col-md-6 agile-sub" style="background-image: url(assets/images/services/Paineis.jpg)">
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
	

		<div class="agile-prod1" id="agribusiness">
			<div class="col-md-6 agile-sub" style="background-image: url(assets/images/services/agro.jpg)">
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
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Movimentação de Grãos</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Armazenagem, Termometria e AeraçãoPellentesque auctor</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Beneficiamento de Sementes</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Obras para alimentação elétrica de Irrigação</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Obras Portuárias</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Instalações à prova de explosão</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="agile-prod1" id="industrial">
			<div class="col-md-6 agile-sub">
				<h4>INSTALAÇÕES ELÉTRICAS E MECÂNICAS</h4>
				<p>Industriais</p>
				<ul>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Alimentícios</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Construtoras</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Fábrica de Rações</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Fertilizantes</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Frigoríficos</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Petroquímico</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Siderúrgico</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Tratamento de água e afluentes</li>
				</ul>
			</div>
			<div class="col-md-6 agile-sub" style="background-image: url(assets/images/services/industrial.jpg)">
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

		<div class="agile-prod1" id="power-generation">
			<div class="col-md-6 agile-sub" style="background-image: url(assets/images/services/energiaSolar.jpg)">
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
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Soluções Fotovoltaicas - ENERGIA SOLAR</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Geradores de gás, diesel e biogás</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Pequenas centrais hidroelétricas (PCH’s)</li>
					<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Usinas Termo Elétricas (UTE’s)</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="agile-prod1" id="commercials">
				<div class="col-md-6 agile-sub">
					<h4>COMERCIAIS</h4>
					<ul>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Automação</li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Central de distribuição (CDs) </li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Centros de TI e data centers</li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Escritórios</li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Supermercados/ Shoppings</li>
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

			<div class="agile-prod1" id="maintenance">
					<div class="col-md-6 agile-sub" style="background-image: url(assets/images/services/manutencao.jpg)">
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
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Gestão de Energia - redução significativa na manutenção corretiva</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Assistência técnica em painéis e instalações elétricas</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Laudos técnicos</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Acompanhamentos das condições da obra (Pós Vendas)</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Termografia e Análise de Energia</li>
							<li><i class="fa fa-arrow-right" aria-hidden="true"></i> Análise e Laudos de condições de fornecimento de Energia</li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
	</div>
</div>
@endsection