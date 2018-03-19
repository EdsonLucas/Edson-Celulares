<div class="tr-breadcrumb">
		<div class="container">
				<div class="breadcrumb-info">
						<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="index">Home</a></li>
								<li class="breadcrumb-item active">Carrinho de Compras</li>
						</ol>
						<div class="page-title">
								<h1>Carrinho de Compras</h1>
						</div>
				</div>
		</div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->

<div class="main-wrapper">
		<div class="container">
				<div class="tr-section products-description">
						<div class="cart-title">
								<span>Carrinho de Compras</span>
						</div>

						<form class="woocommerce-cart-form" action="#">
								<div class="item-info-menu">
										<div class="row">
												<div class="col-md-5">
														<span>Produto</span>
												</div>
												<div class="col-md-5">
														<span>Cor</span>
												</div>
												<div class="col-md-2">
														<span class="price">Preço</span>
												</div>
										</div><!-- /.row -->
								</div>
								<ul class="tr-list cart-list">
										<li class="cart-item remove-item">
												<div class="row">
														<div class="col-md-5">
																<div class="product">
																		<span class="product-image">
																				<img src="<?= $produto[$_POST['id']]['img'] ?>" alt="<?= $produto[$_POST['id']]['nome']?>" class="img-fluid">
																		</span>
																		<span class="product-title"><?= $produto[$_POST['id']]['nome']?></span>
																		<span class="color"><?= $produto[$_POST['id']]['nome-cor']?></span>
																</div><!-- /.product -->
														</div>
														<div class="col-md-5">
																<div class="tr-color">
																		<input type="radio" id="<?= $produto[$_POST['id']]['cor']?>">
																		<label></label>
																</div>
														</div>
														<div class="col-md-2">
																<span class="price"><?= $produto[$_POST['id']]['preco']?></span>
														</div>
												</div>
										</li>
								</ul>
						</form>
						<ul class="tr-list cart-totals">
								<li>
										<div class="row">
												<div class="col-md-10">
														<span>Total</span>
												</div>
												<div class="col-md-2">
														<span class="price"><?= $produto[$_POST['id']]['preco']?></span>
												</div>
										</div>
								</li>
						</ul>
						<div class="buttons">
								<a href="pagamento" class="btn btn-primary pull-right">Finalizar a compra</a>
						</div>
				</div><!-- /.products-description -->

		</div><!-- /.container -->
</div><!-- /.main-wrapper -->
