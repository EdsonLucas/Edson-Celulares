
<!DOCTYPE html>
<html lang="PT_BR">

<head>
    <meta charset="UTF-8">
    <title><?= TITULO ?></title>
    <!-- viewport meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='1992992630981900' property='fb:app_id'>
    <meta property="og:title" content="Edson Celulares">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://store.edsonlucas.com.br/">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image" content="https://store.edsonlucas.com.br/assets/assets/images/banner.jpg">
    <meta property="og:description" content="Quer comprar um celular? Descubra os melhores celulares em promoção, encontre e compre o melhor smartphone para você a um preço excelente.">
    <meta name="description" content="Quer comprar um celular? Descubra os melhores celulares em promoção, encontre e compre o melhor smartphone para você a um preço excelente.">
    <meta name="keywords" content="smartphone, celulares, iphone, android, tecnologia">
    <meta name="robots" content="index,follow">

    <link rel="icon" href="assets/images/favicon.png">

    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

    </head>
    <body>
        <div class="tr-topbar">
            <div class="container clearfix">
                <div class="topbar-right">
                    <ul class="tr-list">
                        <li><span><a href="#"><span class="icon icon-support"></span><?= TEL ?></a></span></li>
                        <li><a href="#"><span class="icon icon-send"></span><?= MAIL ?></a></li>
                    </ul>
                    <a href="#" class="btn btn-primary"><span class="icon icon-dialog"></span> Atendimento</a>
                </div>
            </div><!-- /.container -->
        </div><!-- /.tr-topbar -->

        <div class="topbar-middle">
            <div class="container clearfix">
                <a class="tr-logo logo" href="index">
                  <img class="img-fluid" src="assets/images/logo.png" alt="Logo">
                </a>
                <a class="tr-logo tr-logo-2" href="index">
                  <img class="img-responsive" src="assets/images/logo2.png" alt="Logo">
                </a>
                <form class="search-form" action="#">
                    <input class="form-control" name="Pesquisar" type="text" placeholder="Encontre o seu celular...">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form><!-- /.form -->
                <div class="right-content">

                    <ul class="tr-list cart-content">
                        <li><a href="#"><span class="icon icon-pulse"></span></a></li>
                        <li><a href="#"><span class="icon icon-basket"></span></a></li>
                    </ul>
                </div>
            </div><!-- /.container -->
        </div><!-- /.topbar-middle -->

        <div class="tr-menu">
            <nav class="navbar navbar-toggleable-md">
                <div class="container">
                    <div class="menu-content">
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                              <li class="nav-item tr-dropdown mega-dropdown">
                                  <a class="nav-link" href="#">iPhone</a>
                                  <ul class="tr-dropdown-menu mega-menu" role="menu">
                                      <li>
                                          <span class="title">Modelos</span>
                                         <ul>
                                              <li><a href="#">iPhone x</a></li>
                                              <li><a href="#">iPhone 8 Plus</a></li>
                                              <li><a href="#">iPhone 8</a></li>
                                              <li><a href="#">iPhone 7 Plus</a></li>
                                              <li><a href="#">iPhone 7</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                        <img src="assets/images/phones/iphone.png" />
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item tr-dropdown mega-dropdown">
                                  <a class="nav-link" href="#">Samsung</a>
                                  <ul class="tr-dropdown-menu mega-menu" role="menu">
                                      <li>
                                          <span class="title">Modelos</span>
                                         <ul>
                                              <li><a href="#">Samsung Galaxy S9+</a></li>
                                              <li><a href="#">Samsung Galaxy S9</a></li>
                                              <li><a href="#">Samsung Galaxy Note 8</a></li>
                                              <li><a href="#">Samsung Galaxy S8+</a></li>
                                              <li><a href="#">Samsung Galaxy S8</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                        <img src="assets/images/phones/samsung.png" />
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item tr-dropdown mega-dropdown">
                                  <a class="nav-link" href="#">Google</a>
                                  <ul class="tr-dropdown-menu mega-menu" role="menu">
                                      <li>
                                          <span class="title">Modelos</span>
                                         <ul>
                                              <li><a href="#">Google Pixel 2 xL</a></li>
                                              <li><a href="#">Google Pixel 2</a></li>
                                              <li><a href="#">Google Pixel XL</a></li>
                                              <li><a href="#">Google Pixel</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                        <img src="assets/images/phones/google.jpg" />
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item tr-dropdown mega-dropdown">
                                  <a class="nav-link" href="#">LG</a>
                                  <ul class="tr-dropdown-menu mega-menu" role="menu">
                                      <li>
                                          <span class="title">Modelos</span>
                                         <ul>
                                              <li><a href="#">LG V30</a></li>
                                              <li><a href="#">LG G6</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                        <img src="assets/images/phones/lg.png" />
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item tr-dropdown mega-dropdown">
                                  <a class="nav-link" href="#">Xiaomi</a>
                                  <ul class="tr-dropdown-menu mega-menu" role="menu">
                                      <li>
                                          <span class="title">Modelos</span>
                                         <ul>
                                              <li><a href="#">Xiaomi mi 6</a></li>
                                              <li><a href="#">Xiaomi mi mix 2</a></li>
                                              <li><a href="#">Xiaomi mi note 3</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                        <img src="assets/images/phones/xiaomi.png" />
                                      </li>
                                  </ul>
                              </li>
                              <li class="nav-item tr-dropdown mega-dropdown">
                                  <a class="nav-link" href="#">Sony</a>
                                  <ul class="tr-dropdown-menu mega-menu" role="menu">
                                      <li>
                                          <span class="title">Modelos</span>
                                         <ul>
                                              <li><a href="#">Sony Xperia XZ2</a></li>
                                              <li><a href="#">Sony Xperia XZ Premium</a></li>
                                              <li><a href="#">Sony Xperia XZ1</a></li>
                                          </ul>
                                      </li>
                                      <li>
                                        <img src="assets/images/phones/sony.png" />
                                      </li>
                                  </ul>
                              </li>
                            </ul>
                        </div>
                    </div><!-- /.menu-content -->
                </div><!-- /.container -->
            </nav>
        </div><!-- /.tr-menu -->
        <?php
        $this->loadView($viewName, $viewData);
        ?>
        <div class="tr-footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Formas de Pagamento</h3>
                            <br />
                            <div class="payment-card">
                                <ul class="tr-list">
                                    <li><img src="assets/images/others/card1.png" alt="Image" class="img-fluid"></li>
                                    <li><img src="assets/images/others/card2.png" alt="Image" class="img-fluid"></li>
                                    <li><img src="assets/images/others/card3.png" alt="Image" class="img-fluid"></li>
                                </ul>
                            </div><!-- /.payment-card -->
                        </div>
                        <div class="col-sm-6">
                            <div class="left-content">
                                <h3>Newsletter</h3>
                                <p>Receba as novidades em seu email.</p>
                                <form action="#" method="post">
                                    <input class="form-control" type="email" placeholder="Informe o seu e-mail" required>
                                    <input type="submit" class="btn">
                                </form>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-top -->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                      <div class="col-md-6">
                          <div class="footer-logo">
                              <a href="index"><img src="assets/images/logo.png" alt="Logo" class="img-fluid"></a>
                          </div>
                          <span>&copy; 2018 <a href="#">Edson Celulares</a>.</span>
                          <span>Todos os Direitos Reservados</span>
                      </div><!-- /.footer-widget -->
                      <div class="col-md-6">
                          <div class="footer-logo currency">
                              <img src="assets/images/certificate/1.png" alt="Logo" class="img-fluid">&nbsp;&nbsp;
                              <img src="assets/images/certificate/2.png" alt="Logo" class="img-fluid">&nbsp;&nbsp;
                              <img src="assets/images/certificate/3.png" alt="Logo" class="img-fluid">
                          </div>
                      </div><!-- /.footer-widget -->
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div><!-- /.footer-bottom -->
        </div><!-- /.tr-footer -->

        <!-- JS -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/tether.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/jquery-ui-min.js"></script>
        <script src="assets/js/jquery.spinner.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>
