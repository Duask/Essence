<!DOCTYPE html>
<html class="no-js" lang="zxx">

<?php
    include 'skydash/global/ServerConfiguration.php';
    include 'skydash/global/DbConnection.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Essence - Fashion Ecommerce Template</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="css/core-style.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between pink-background">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="img/core-img/logo.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="#">Tienda</a>
                                <div class="megamenu">
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Mujer</li>
                                        <li><a href="shop.html">Vestidos</a></li>
                                        <li><a href="shop.html">Blusas &amp; Camisas</a></li>
                                        <li><a href="shop.html">Camisetas</a></li>
                                        <li><a href="shop.html">Rompers</a></li>
                                        <li><a href="shop.html">Ropa Interior</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Hombre</li>
                                        <li><a href="shop.html">Camisetas</a></li>
                                        <li><a href="shop.html">Polo</a></li>
                                        <li><a href="shop.html">Camisas</a></li>
                                        <li><a href="shop.html">Chaquetas</a></li>
                                        <li><a href="shop.html">Abrigos</a></li>
                                    </ul>
                                    <ul class="single-mega cn-col-4">
                                        <li class="title">Niños</li>
                                        <li><a href="shop.html">Vestidos</a></li>
                                        <li><a href="shop.html">Camisas</a></li>
                                        <li><a href="shop.html">Camisetas</a></li>
                                        <li><a href="shop.html">Chaquetas</a></li>
                                        <li><a href="shop.html">Abrigos</a></li>
                                    </ul>
                                    <div class="single-mega cn-col-4">
                                        <img src="img/bg-img/bg-6.jpg" alt="">
                                    </div>
                                </div>
                            </li>
                            <li><a href="#">Paginas</a>
                                <ul class="dropdown">
                                    <li><a href="index.html">Inicio</a></li>
                                    <li><a href="shop.html">Tienda</a></li>
                                    <li><a href="single-product-details.html">Productos</a></li>
                                    <li><a href="checkout.html">Carrito</a></li>
                                    <li><a href="blog.html">¿Quienes somos?</a></li>
                                    <li><a href="single-blog.html">Single Blog</a></li>
                                    <li><a href="regular-page.html">Regular Page</a></li>
                                    <li><a href="contact.html">Contacto</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">¿Quienes somos?</a></li>
                            <li><a href="contact.html">Contacto</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Buscar">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="#"><img src="img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Right Side Cart Area ##### -->
    <div class="cart-bg-overlay"></div>

    <div class="right-side-cart-area">

        <!-- Cart Button -->
        <div class="cart-button">
            <a href="#" id="rightSideCart"><img src="img/core-img/bag.svg" alt=""> <span>3</span></a>
        </div>

        <div class="cart-content d-flex">

            <!-- Cart List Area -->
            <div class="cart-list">
                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-1.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-2.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>

                <!-- Single Cart Item -->
                <div class="single-cart-item">
                    <a href="#" class="product-image">
                        <img src="img/product-img/product-3.jpg" class="cart-thumb" alt="">
                        <!-- Cart Item Desc -->
                        <div class="cart-item-desc">
                          <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                            <span class="badge">Mango</span>
                            <h6>Button Through Strap Mini Dress</h6>
                            <p class="size">Size: S</p>
                            <p class="color">Color: Red</p>
                            <p class="price">$45.00</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="cart-amount-summary">

                <h2>Resumen</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>entrega:</span> <span>Free</span></li>
                    <li><span>descuento:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">carrito</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>Vestidos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Shop Grid Area Start ##### -->
    <section class="shop_grid_area section-padding-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="shop_sidebar_area">

                        <!-- ##### Single Widget ##### -->
                        <div class="widget catagory mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Categorias</h6>

                            <!--  Catagories  -->
                            <div class="catagories-menu">
                                <ul id="menu-content2" class="menu-content collapse show">
                                    <!-- Single Item -->
                                    <form action="" method="post">
                                        <nav>
                                            <ul>
                                            <li><button id="filter-btn" name="filter" value="" type="submit">Todo</button></li>
                                                <li><button class="" name="filter" value="Vestido" type="submit">Vestidos</button></li>
                                                <li><button class="" name="filter" value="Tops" type="submit">Tops</button></li>
                                                <li><button class="" name="filter" value="Faldas" type="submit">Faldas</button></li>
                                                <li><button class="Trajes" name="filter" value="Faldas" type="submit">Trajes</button></li>
                                            </ul>
                                        </nav>
                                    </form>
                                    <li>
                                        <a href="#">ropa</a>
                                        <ul class="sub-menu collapse show" id="clothing">
                                            <li><a href="#">Todos</a></li>
                                            <li><a href="#">Cuerpo Completo</a></li>
                                            <li><a href="#">Vestidos</a></li>
                                            <li><a href="#">Sudaderas</a></li>
                                            <li><a href="#">Chaquetas &amp; Abrigos</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Pantalones &amp; Leggings</a></li>
                                            <li><a href="#">Rompers &amp; Pijamas</a></li>
                                            <li><a href="#">Camisas &amp; Blusas</a></li>
                                            <li><a href="#">Camisas</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#shoes" class="collapsed">
                                        <a href="#">calzado</a>
                                        <ul class="sub-menu collapse" id="shoes">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Bodysuits</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Hoodies &amp; Sweats</a></li>
                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Pants &amp; Leggings</a></li>
                                            <li><a href="#">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href="#">Shirts &amp; Blouses</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Item -->
                                    <li data-toggle="collapse" data-target="#accessories" class="collapsed">
                                        <a href="#">accesorios</a>
                                        <ul class="sub-menu collapse" id="accessories">
                                            <li><a href="#">All</a></li>
                                            <li><a href="#">Bodysuits</a></li>
                                            <li><a href="#">Dresses</a></li>
                                            <li><a href="#">Hoodies &amp; Sweats</a></li>
                                            <li><a href="#">Jackets &amp; Coats</a></li>
                                            <li><a href="#">Jeans</a></li>
                                            <li><a href="#">Pants &amp; Leggings</a></li>
                                            <li><a href="#">Rompers &amp; Jumpsuits</a></li>
                                            <li><a href="#">Shirts &amp; Blouses</a></li>
                                            <li><a href="#">Shirts</a></li>
                                            <li><a href="#">Sweaters &amp; Knits</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget price mb-50">
                            <!-- Widget Title -->
                            <h6 class="widget-title mb-30">Filtrar por</h6>
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Precio</p>

                            <div class="widget-desc">
                                <div class="slider-range">
                                    <div data-min="49" data-max="360" data-unit="$" class="slider-range-price ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" data-value-min="49" data-value-max="360" data-label-result="Range:">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all"></div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"></span>
                                    </div>
                                    <div class="range-price">Rango: $49.00 - $360.00</div>
                                </div>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget color mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Color</p>
                            <div class="widget-desc">
                                <ul class="d-flex">
                                    <li><a href="#" class="color1"></a></li>
                                    <li><a href="#" class="color2"></a></li>
                                    <li><a href="#" class="color3"></a></li>
                                    <li><a href="#" class="color4"></a></li>
                                    <li><a href="#" class="color5"></a></li>
                                    <li><a href="#" class="color6"></a></li>
                                    <li><a href="#" class="color7"></a></li>
                                    <li><a href="#" class="color8"></a></li>
                                    <li><a href="#" class="color9"></a></li>
                                    <li><a href="#" class="color10"></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- ##### Single Widget ##### -->
                        <div class="widget brands mb-50">
                            <!-- Widget Title 2 -->
                            <p class="widget-title2 mb-30">Marcas</p>
                            <div class="widget-desc">
                                <ul>
                                    <li><a href="#">Asos</a></li>
                                    <li><a href="#">Mango</a></li>
                                    <li><a href="#">River Island</a></li>
                                    <li><a href="#">Topshop</a></li>
                                    <li><a href="#">Zara</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                        <?php
                            $filter = (isset($_POST['filter']))?$_POST['filter']:"";
                        ?>

                        <?php
                        switch ($filter) {
                            case 'Vestidos':
                                $QueryProductos=$pdo->prepare("SELECT * FROM product WHERE idCategory=1");
                                $QueryProductos->execute();
                                $ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
                            break;
                            
                            case 'Tops':
                                $QueryProductos=$pdo->prepare("SELECT * FROM product WHERE idCategory=2");
                                $QueryProductos->execute();
                                $ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
                            break;
                            
                            case 'Faldas':
                                $QueryProductos=$pdo->prepare("SELECT * FROM product WHERE idCategory=3");
                                $QueryProductos->execute();
                                $ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
                            break;

                            case 'Trajes':
                                $QueryProductos=$pdo->prepare("SELECT * FROM product WHERE idCategory=4");
                                $QueryProductos->execute();
                                $ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
                            break;

                            default:
                                $QueryProductos=$pdo->prepare("SELECT * FROM product");
                                $QueryProductos->execute();
                                $ProductosLista=$QueryProductos->fetchAll(PDO::FETCH_ASSOC);
                            break;
                        }
                        ?>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="shop_grid_product_area">
                        <div class="row">
                            <div class="col-12">
                                <div class="product-topbar d-flex align-items-center justify-content-between">
                                    <!-- Total Products -->
                                    <div class="total-products">
                                        <p><span>186</span> productos encontrados</p>
                                    </div>
                                    <!-- Sorting -->
                                    <div class="product-sorting d-flex">
                                        <p>Ordenar por:</p>
                                        <form action="#" method="get">
                                            <select name="select" id="sortByselect">
                                                <option value="value">Mejor calificado</option>
                                                <option value="value">Mas nuevo</option>
                                                <option value="value">Precio: $$ - $</option>
                                                <option value="value">Precio: $ - $$</option>
                                            </select>
                                            <input type="submit" class="d-none" value="">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                       
                        <div class="container bot-margin">
                        
                    <div class="container">
                        <form method="post">
                            <div class="properties_button">

                                <!--<div class="tab-content" id="nav-tabContent">
                                    <?php //if($mensaje!=""){?>
                                    <div class="alert alert-success">
                                        <?php //echo $mensaje; ?>
                                        <a href="carrito.php" class="badge badge-success">Ver carrito</a>
                                    </div>
                                    <?php //} ?>
                                </div> -->
                            </div>                            
                        </form>
                        
                    </div>

    </div>

                        <?php foreach ($ProductosLista as $producto) { ?>
                                    
                            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="single-product-wrapper">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <img src="<?php echo 'skydash/pages/forms/images/'.$producto['productImage']; ?>" alt="">
                                    </div>

                                    <!-- Product Description -->
                                    <div class="product-description">
                                        <span><?php echo $producto['idCategory']; ?></span>
                                        <a href="single-product-details.html">
                                            <h6><?php echo $producto['productName']; ?></h6>
                                        </a>
                                        <p class="product-price">$<?php echo $producto['productPrice'] ?></p>

                                        <!-- Hover Content -->
                                        <div class="hover-content">
                                            <!-- Add to Cart -->
                                            <div class="add-to-cart-btn">
                                                <form action="" method="post">
                                                    <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['idProducto'], COD,KEY); ?>">
                                                    <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['productName'], COD,KEY); ?>">
                                                    <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['price'], COD,KEY); ?>">
                                                    <input type="hidden" name="imagen" id="imagen" value="<?php echo openssl_encrypt($producto['productImage'], COD,KEY); ?>">
                                                    <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt( 1,COD,KEY); ?>">
                                                    <button class="btn essence-btn" name="btnAccion" value="Agregar" type="submit">
                                                        Agregar al carrito
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                        <?php } ?>


                        </div>
                    </div>
                    <!-- Pagination -->
                    <nav aria-label="navigation">
                        <ul class="pagination mt-50 mb-70">
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">21</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Grid Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="img/core-img/logo2.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="shop.html">Tienda</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contact.html">¿Quienes somos?</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Órdenes</a></li>
                            <li><a href="#">Opciones de pago</a></li>
                            <li><a href="#">Entregas</a></li>
                            <li><a href="#">Guía</a></li>
                            <li><a href="#">Politica de privacidad</a></li>
                            <li><a href="#">Términos de uso</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribete</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Su correo electrónico">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="https://www.instagram.com/krmodamx/" target="_blank" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>, distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>

</body>

</html>