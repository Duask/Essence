<!DOCTYPE html>
<html lang="en">

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

                <h2>Summary</h2>
                <ul class="summary-table">
                    <li><span>subtotal:</span> <span>$274.00</span></li>
                    <li><span>delivery:</span> <span>Free</span></li>
                    <li><span>discount:</span> <span>-15%</span></li>
                    <li><span>total:</span> <span>$232.00</span></li>
                </ul>
                <div class="checkout-btn mt-100">
                    <a href="checkout.html" class="btn essence-btn">check out</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Right Side Cart End ##### -->


    <div class="contact-area d-flex align-items-center">
        
        <!--CONTACT START-->
        
<?php
    $result = "";
    $error  = "";
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer/Exception.php';
       require 'PHPMailer/PHPMailer.php';
       require 'PHPMailer/SMTP.php';
   $txtName = (isset($_POST['name']))?$_POST['name']:"";
   $txtEmail = (isset($_POST['email']))?$_POST['email']:"";
   $txtSubject = (isset($_POST['subject']))?$_POST['subject']:"";
   $txtMessage = (isset($_POST['message']))?$_POST['txtCategory']:""; 
try{
   if(isset($_POST['submitB']))
   {
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
       
    //Create an instance; passing `true` enables exceptions
       $mail = new PHPMailer(true);
   
       //Server settings
       $mail->SMTPDebug = 0;                      //Enable verbose debug output
       $mail->isSMTP();                                            //Send using SMTP
       $mail->Host       = 'smtp.titan.email';                     //Set the SMTP server to send through
       $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
       $mail->Username   = 'contacto@krmodamx.space';                     //SMTP username
       $mail->Password   = '#.Kamoda81';                               //SMTP password
       $mail->SMTPSecure = 'ssl';               //Enable implicit TLS encryption
       $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
   
       //Recipients
       $mail->setFrom('contacto@krmodamx.space', 'Contacto');
       $mail->addAddress('contacto@krmodamx.space', 'Contacto');     //Add a recipient
       //$mail->addAddress('contacto@cookietienda.tk');               //Name is optional
       //$mail->addReplyTo('contacto@cookietienda.tk', 'Information');
       //$mail->addCC('contacto@cookietienda.tk');
       //$mail->addBCC('contacto@cookietienda.tk');
       //$mail->setFrom($_POST['email'],$_POST['name']);
       
       $mail->isHTML(true);    
       $mail->addReplyTo($_POST['email'],$_POST['name']);    
       $mail->addAddress($_POST['email']);//correo del cliente aqui. Pero en form contacto, se pone el mismo correp
       $mail->Subject='Form Submission:' .$_POST['subject'];
       $mail->Body='<h3>El cliente '.$_POST['name'].'<br> con correo : '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h3>'; 
       //Attachments
      // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
       //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
       //Content
       
                               //Set email format to HTML
       //$mail->Subject = 'Here is the subject';
       //$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
       $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
   
       
       $mail->send();
       if(!$mail->send())
       {
         $error = "Something went wrong. Please try again.";
       }
       else 
       {
         $result="Thanks\t" .$_POST['name']. " for contacting us.";
       }
   }
}catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}?>

        <!--contact END-->
        <!--form start-->
        
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 grid-margin">
                    <div class="card">
                        <form action="" method="POST">
                            <div class="card-body">
                                <h4 class="card-title">Realice una cita</h4>
                                <form class="form-sample">      
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-md-3 col-form-label">Nombre</label>
                                                <div class="col-sm-8 col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control " name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nombre'" placeholder="Nombre">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                             
                                    
                                        <div class="col-md-6 col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-md-3 col-form-label">Correo</label>
                                                <div class="col-sm-8 col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control " name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dirección de correo electrónico'" placeholder="Dirección de correo electrónico">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="col-md-9 col-sm-12">
                                            <div class="form-group row">
                                                <label class="col-sm-4 col-md-2  col-form-label">Asunto</label>
                                                <div class="col-sm-8 col-md-9">
                                                    <div class="form-group">
                                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" placeholder="El motivo de su correo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Introduzca su mensaje'" placeholder="Introduzca su mensaje"></textarea>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group mt-3">
                                        <button type="submit" name="submitB" value="submitB" class="btn btn-primary mr-2">Enviar</button>
                                    </div>
                            </form>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        

        <!--form end-->

        <div class="google-map">
            <div id="googleMap"></div>
        </div>

        <div class="contact-info">
            <h2>Donde Encontrarnos</h2>
            <p>En estos momentos KrModaMx es una empresa que funciona independiente de un negocio, de forma que realizamos entregas de pedidos en diversos puntos de la ciudad.</p>
            
            <div class="contact-address mt-50">
                <p><span>ubicación:</span> Las fuentes #1903 Reynosa, Tamaulipas.</p>
                <p><span>teléfono:</span> +52 899 5328 192</p>
                <p><span>correo: </span><a href="mailto:contact@essence.com">krmodamx@gmail.com</a></p>
                <p></p>
            </div>
        </div>

    </div>

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
                            <li><a href="blog.html">¿Quíenes somos?</a></li>
                            <li><a href="contact.html">Contacto</a></li>
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
                        <li><a href="#">Política de privacidad</a></li>
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
    <!-- Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

    </body>

    </html>