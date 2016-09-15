<?php include 'head.php' ?>

	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="title-pag">GALERIA</h1>
				</div>
			</div>
		</div>
	</section>

<?php include 'menu.php' ?>

	<section class="conteudo-galeria">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<h2>Nossa Galeria</h2>
					<div class="linha"></div>
					<div class="row">
						<?php for ($i=0; $i <8; $i++):?>
							<div class="col-sm-4 col-xs-6">
								<div class="box-foto">
									<a  id="single_image" href="assets/img/servi1.jpg">
										<img src="assets/img/servi1.jpg" alt="Imagem da Galeria">
									</a>	
								</div>
							</div>
						<?php endfor ?>
					</div>
				</div>
			</div>
		</div>
		
<?php include 'footer.php' ?>