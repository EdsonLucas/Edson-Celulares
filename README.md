# Edson Celulares
This project use a very simple PHP MVC application skeleton. It's designed to be lightweight and modular, allowing developers to build better and easy to maintain code with PHP.

## Requirements

**The framework requirements are limited.**

- PHP 7.0 or greater.
- Apache Web Server or equivalent with mod_rewrite support (like Mamp, Xampp or etc).

### Installation Overview

To clone the app, run:

```git
git clone https://github.com/EdsonLucas/Edson-Celulares.git
```
It will create a directory called `Edson-Celulares` inside the current folder.
Inside that directory, it will generate the initial project structure and install the transitive dependencies

```
Edson Celulares
├── README.md
├── app
│   ├── index.php
│   ├── index.php
│   ├── robots.txt
│   ├── .htaccess
│   ├── assets
│   │   └── images*
│   │   └── css*
│   │   └── js*
│   ├── core
│   │   └── Core.php
│   │   └── controller.php
│   ├── controllers
│   │   └── homeController.php
│   │   └── smartphoneController.php
│   │   └── carrinhoDeComprasController.php
│   │   └── pagamentoController.php  
│   │   └── compraFinalizadaController.php  
│   ├── models
│   │   └── DBprodutos.php
│   └── views
│       └── template.php
│       └── home.php
│       └── smartphone.php
│       └── carrinho-de-compras.php
│       └── pagamento.php
│       └── compra-finalizada.php
├── build
│   └── *same files of app
├── gulpfile.js
├── .gitignore
└── package.json
```

## Observations

If you have problems with the file Core, remember to change the `$url` name to your `folder name`, or you project will break. If you are using OSX, remember to change the `$_SERVER['REQUEST_URI']` to `$_SERVER['PHP_SELF']`.
