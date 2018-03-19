<div class="tr-breadcrumb">
    <div class="container">
        <div class="breadcrumb-info">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item">Smartphone</li>
                <li class="breadcrumb-item"></li>
            </ol>
            <div class="page-title">
                <h1><?= $produto[$_POST['id']]['nome'] ?></h1>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->

<div class="main-wrapper product-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="tr-section product-details">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-details-slider">
                                <div class="product">
                                    <br />
                                    <img src="<?= $produto[$_POST['id']]['img']?>" alt="<?= $produto[$_POST['id']]['nome']?>" class="img-fluid">
                                </div>
                            </div><!-- /.product-details-slider -->
                        </div>
                        <div class="col-lg-6">
                            <div class="products-details-info">
                                <ul class="tr-list list-inline tr-share-content">
                                    <li class="share-icon">
                                        <i class="fa fa-share-alt" aria-hidden="true"></i>
                                        <span><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></span>
                                    </li>
                                </ul><!-- /.tr-share -->
                                <h1><?= $produto[$_POST['id']]['nome']?></h1>
                                <div class="rating-star">
                                    <ul class="tr-list rating">
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                                    </ul>
                                </div><!-- /.rating-star -->
                                <div class="quantity-price">
                                    <div class="price">
                                        <span><?= $produto[$_POST['id']]['preco']?></span>
                                    </div>
                                </div>
                                <br />
                                <div class="add-to-cart">
                                    <form action="carrinho-de-compras" method="post">
                                      <input type="hidden" name="id" value="<?= $produto[$_POST['id']]['id']?>">
                                      <input class="btn btn-primary" type="submit" value="comprar">
                                    </form>
                                    <a href="#"><span class="icon icon-pulse"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.product-details -->

                <div class="tr-section products-description">
                    <ul class="nav nav-tabs description-tabs" role="tablist">
                        <li role="presentation" class="nav-item"><a class="nav-link active" href="#details" aria-controls="details" role="tab" data-toggle="tab">Descrição</a></li>
                    </ul>

                    <div class="tab-content">
                        <?= $produto[$_POST['id']]['descricao']?>
                    </div><!-- /.tab-content -->
                </div><!-- /.products-description -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /.main-wrapper -->
