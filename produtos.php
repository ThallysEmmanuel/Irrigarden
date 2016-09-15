<?php include 'head.php' ?>
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="title-pag">PRODUTOS</h1>
				</div>
			</div>
		</div>
	</section>
<?php include 'menu.php' ?>
	<section class="conteudo-produtos">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Os melhores produtos e os menores preços do mercado!</h2>
					<div class="linha"></div>
					<div class="row">
						<?php for ($i=0; $i <12; $i++):?>
							<div class="col-sm-3">
								<div class="box-produto">
									<img src="/Irrigarden/assets/img/irrigador.jpg" alt="">
									<span class="nome-produto">Irrigador s48125</span>
									<span class="preco-produto">R$ 25,00</span>
									<ul>
										<li><a href="#" class="details">Detalhes</a></li>
										<li><a href="#" class="comprar">Comprar</a></li>
									</ul>						
								</div>
							</div>
						<?php endfor ?>
					</div>
				</div>
			</div>
		</div>
	</section>



<?php include 'footer.php' ?>