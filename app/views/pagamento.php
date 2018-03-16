<div class="tr-breadcrumb">
    <div class="container">
        <div class="breadcrumb-info">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index">Home</a></li>
                <li class="breadcrumb-item">Carrinho de Compras</li>
                <li class="breadcrumb-item"></li>
            </ol>
            <div class="page-title">
                <h1>Pagamento</h1>
            </div>
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->

<div class="main-wrapper pdb-0">
    <div class="container">
        <div class="tr-section products-description">
            <div class="cart-title">
                <span>Dados Pessoais</span>
            </div>

            <form class="contact-form" name="contact-form" method="post" action="#">
                <ul class="tr-list delivery-category">
                    <li>
                        <input type="radio" name="sellType" value="Frete Gratuito" checked>
                        <label>Frete Gratuito</label>
                    </li>
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Telefone</label>
                            <input type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group address">
                            <label>Endereço</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="zip">Código Postal</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>
                </div>
            </form>
        </div><!-- /.products-description -->

    </div><!-- /.container -->
</div><!-- /.main-wrapper -->

<div class="main-wrapper pdt-0">
    <div class="container">
        <div class="tr-section products-description">
            <div class="cart-title">
                <span>Formas de Pagamento</span>
            </div>

            <form class="contact-form" method="post" action="#">
                <div class="payment-category">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="radio" name="sellType1" value="credit-card" id="credit-card">
                                    <label for="credit-card">Cartão de Crédito</label>
                                    <p>Pagamento rápido, fácil e seguro.</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="payment-card pull-right">
                                        <span><img src="assets/images/others/visa-logo.png" alt="Logo" class="img-fluid"></span>
                                        <span><img src="assets/images/others/mastercard-logo.png" alt="Logo" class="img-fluid"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="radio" name="sellType1" value="paypal" id="paypal">
                                    <label for="paypal">Paypal</label>
                                    <p>Alternativa mais segura para nossos clientes!</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="payment-card">
                                        <img src="assets/images/others/paypal-logo.png" alt="Logo" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="card-number">Número do Cartão</label>
                            <input type="text" class="form-control" id="card-number" placeholder="4276 7898 4565 1232">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="card-name">Nome Completo</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group expire-date">
                            <label>Validade</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="date" class="form-control" value="25-10-2018">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="form-group cvv-code">
                            <label for="cvv-code">Código de Segurança</label>
                            <input type="number" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <a href="compra-finalizada" class="btn btn-primary pull-right">Finalizar Compra</a>
                </div>
            </form>
        </div><!-- /.products-description -->

    </div><!-- /.container -->
</div><!-- /.main-wrapper -->
