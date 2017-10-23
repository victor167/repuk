@extends('viewparent/app')

@section('title','Ejemplo de titulo')
@section('description','Ejemplo de descripcion')

@section('content')
<div class="pre-loader">
    <div class="load-con animated fadeInDown">
        <img src="assets/images/kuper.png"  alt="kuper">
        <div class="spinner">
          <div class="bounce1"></div>
          <div class="bounce2"></div>
          <div class="bounce3"></div>
        </div>
    </div>
</div>
<div id="variable">
    {{ $demo1 }}
</div>
<div id="if">
    @if($demo2==1)
        Salio 1
    @elseif($demo2==2)
        Salio 2
    @else
        Salio
    @endif
</div>
<div id="for">
    @for ($i = 0; $i < 3; $i++)
        Loop N°{{$i}}
    @endfor
</div>
<div id="foreach">
    @foreach($list as $item)
        Item
    @endforeach
</div>
<div class="sidemenu-overlay"></div>

<header class="header sticky-header" canvas="">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-md-12 sub-top">
                <div class="social">
                    <div class="hidden-md hidden-sm hidden-xs"><a href="#" target="_blank"><i class="i-facebook1"></i></a></div>
                    <div class="hidden-md hidden-sm hidden-xs"><a href="#" target="_blank"><i class="i-twitter1"></i></a></div>
                    <div class="hidden-md hidden-sm hidden-xs"><a href="#" target="_blank"><i class="i-instagram2"></i></a></div>
                    <div><a href="#" class="i-email4"> contacto@kuper.pe</a></div>
                    <div>
                        <a href="whatsapp://send?text=Ingresa%20a%20Kuper.pe%2C%20tu%20mejor%20opci%C3%B3n%20en%20polos%20de%20super%20h%C3%A9roes%2C%20villanos%20y%20tus%20series%20favoritas%20de%20TV - http%3A%2F%2Fkuper.pe%2F" class="whatsapp"><i class="i-whatsapp"></i></a>
                        <a href="tel:+511997250279" class="i-hset"> <span>997 250 279</span></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-4 col-xs-6">
                <div class="site-logo">
                    <a href="index.html">
                        <img src="assets/images/kuper-logo.png" alt="Kuper.pe" title="Kuper.pe">
                        <h1 class="sr-only">Kuper.pe</h1>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-8 col-xs-6">
                <div class="right">
                    <div class="dropdown idropdown">
                        <a id="drop0" href="cart.html" class="sp i-shop">
                            <span class="hidden-xs">Carrito de Compras</span><span class="cart-count">10</span><i class="hidden-xs i-down1"></i>
                        </a>
                        <div class="dropdown-menu right1 with-arrow">
                            <p class="idd-info">Usted tiene 2 productos en su carrito de compras.</p>
                            <div class="idd-content">
                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name">
                                            <img src="assets/images/products/small/product2.jpg" alt="Product Image">
                                        </a>
                                    </figure>

                                    <div>
                                        <a href="#" class="btn-delete" title="Eliminar producto" role="button"></a>
                                        <h4 class="product-title"><a href="product.html">Sunglasses</a></h4>
                                        <div class="product-price-container">
                                            <span class="product-price">$110.00</span>
                                        </div>
                                        <div class="product-qty">x1</div>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name">
                                            <img src="assets/images/products/small/product1.jpg" alt="Product Image">
                                        </a>
                                    </figure>

                                    <div>
                                        <a href="#" class="btn-delete" title="Eliminar producto" role="button"></a>
                                        <h4 class="product-title"><a href="product.html">Leather Belt</a></h4>
                                        <div class="product-price-container">
                                            <span class="product-price">$99.00</span>
                                        </div>
                                        <div class="product-qty">x1</div>
                                    </div>
                                </div>
                            </div>

                            <div class="idd-footer">
                                <div class="idd-total"><span>TOTAL:</span> $209.00</div>
                                <a href="checkout.html" class="btn btn-primary">Ver carrito</a>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown idropdown">
                        <a href="#" class="ss i-user3 dropdown-toggle" id="drop1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="hidden-xs">David</span><i class="hidden-xs i-down1"></i>
                        </a>
                        <div class="dropdown-menu right2 with-arrow" aria-labelledby="drop1">
                            <!-- form action="#">
                                <div class="idd-content">

                                    <div class="dlogin">
                                        <div class="form-group">
                                            <input class="form-control" name="email" id="email" type="text" placeholder="Correo Electrónico" required>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" name="password" id="password" type="password" placeholder="Contraseña" required>
                                        </div>

                                        <div class="clearfix form-more">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember">
                                                    <span class="checkbox-box"><span class="check"></span></span>
                                                    Recuérdame
                                                </label>
                                            </div>

                                            <div class="idd-footer">
                                                <button class="btn btn-primary">Ingresar</button>
                                            </div>

                                            <div class="zlinks">
                                                <ul>
                                                    <li><a href="#">¿Olvidaste tu contraseña? <span>Haz click aquí</span>.</a></li>
                                                    <li><a href="#">Crear un nuevo usuario. <span>Registrarse</span>.</a></li>
                                                </ul>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </form -->

                            <form action="#">
                                <div class="idd-content">

                                    <ul class="dprofile">
                                        <li class="visible-xs"><a href="#">¡Hola David!</a></li>
                                        <li><a href="#" class="i-card1">Mi cuenta</a></li>
                                        <li><a href="#" class="i-heart2">Lista de deseos</a></li>
                                        <li><a href="#" class="i-list1">Lista de direcciones</a></li>
                                        <li><a href="#" class="i-logout">Cerrar sesión</a></li>
                                    </ul>

                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="response hidden-lg hidden-md">
                        <button class="js-toggle-left-slidebar">
                            <i class="i-response4"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu hidden-xs hidden-sm">
        <div class="container">
            <ul>
                <li><a href="#" class="i-home"></a></li>
                <li><a href="#">Nosotros</a></li>
                <li class="dropdown">
                    <a href="#">Hombres<i class="i-down3"></i></a>
                    <div class="dropdown-menu left1 with-arrow">
                        <ul class="submen">
                            <li><a href="#">Todo</a></li>
                            <li><a href="#">Polos</a></li>
                            <li><a href="#">Poleras</a></li>
                            <li><a href="#">Raglán</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">Mujeres<i class="i-down3"></i></a>
                    <div class="dropdown-menu left1 with-arrow">
                        <ul class="submen">
                            <li><a href="#">Todo</a></li>
                            <li><a href="#">Polos</a></li>
                            <li><a href="#">Poleras</a></li>
                            <li><a href="#">Raglán</a></li>
                        </ul>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#">Temáticas<i class="i-down3"></i></a>
                    <div class="dropdown-menu left1 with-arrow">
                        <ul class="submen">
                            <li><a href="#">Todo</a></li>
                            <li><a href="#">Villanos</a></li>
                            <li><a href="#">Star Wars</a></li>
                            <li><a href="#">Marvel Comics</a></li>
                            <li><a href="#">DC Comics</a></li>
                            <li><a href="#">Series</a></li>
                            <li><a href="#">Vengadores</a></li>
                            <li><a href="#">Liga de la Justicia</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Ofertas</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <div class="top-search">
                <form>
                    <input type="text" placeholder="Buscar producto...">
                    <button type="submit"><i class="i-search1"></i></button>
                </form>
            </div>
        </div>
    </div>
</header>

<div canvas="container">
    <div id="wrapper">

        <div class="main2">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-md-push-3">
                        <div class="content">
                            <div class="breads hidden-xs">
                                <ol class="breadcrumb">
                                    <li>
                                        <a href="index.html"><i class="i-home"></i> Inicio</a>
                                    </li>
                                    <li class="active">
                                        Bolsa de compras
                                    </li>
                                </ol>
                            </div>

                            <div class="page-header text-center">
                                <h1>Tu Bolsa de Compras</h1>
                                <p>Su compra en Kuper.pe será procesada en nuestros servidores seguros.</p>
                            </div>

                            <div class="xtable">
                                <div class="xrow hidden-xs">
                                    <div class="xcol xcol1">
                                        <div class="ytable">
                                            <div class="yrow">
                                                <div class="ycol ycol1 xhead">
                                                Producto
                                                </div>
                                                <div class="ycol ycol2 xhead">
                                                Descripción
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xcol xcol2">
                                        <div class="ytable">
                                            <div class="yrow">
                                                <div class="ycol ycol3 xhead">
                                                Cantidad
                                                </div>
                                                <div class="ycol ycol4 xhead">
                                                Precio
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xcol xcol3">

                                    </div>
                                </div>

                                <div class="xrow">
                                    <div class="xcol xcol1">
                                        <div class="ytable">
                                            <div class="yrow">
                                                <div class="ycol ycol1">
                                                    <figure class="iproduct-image">
                                                        <a href="product.html">
                                                            <img src="assets/images/products/cart/product1.jpg" alt="Product">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="ycol ycol2">
                                                    <p>Polo Batman: El Caballero de la Noche Regresa<br>Cód: KPHB0000001<br>Talla: L</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xcol xcol2">
                                        <div class="ytable">
                                            <div class="yrow">
                                                <div class="ycol ycol3">
                                                    <input class="cart-product-quantity form-control" type="text">
                                                </div>
                                                <div class="ycol ycol4">
                                                    S/ 999.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xcol xcol3">
                                        <span class="hidden-xs">
                                            <a href="#" class="btn-delete" title="Eliminar producto" role="button"></a>
                                        </span>
                                        <span class="visible-xs">
                                            <a href="#" title="Eliminar producto">Eliminar</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="xrow">
                                    <div class="xcol xcol1">
                                        <div class="ytable">
                                            <div class="yrow">
                                                <div class="ycol ycol1">
                                                    <figure class="iproduct-image">
                                                        <a href="product.html">
                                                            <img src="assets/images/products/cart/product1.jpg" alt="Product">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="ycol ycol2">
                                                    <p>Polo Batman: El Caballero de la Noche Regresa<br>Cód: KPHB0000001<br>Talla: L</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xcol xcol2">
                                        <div class="ytable">
                                            <div class="yrow">
                                                <div class="ycol ycol3">
                                                    <input class="cart-product-quantity form-control" type="text">
                                                </div>
                                                <div class="ycol ycol4">
                                                    S/ 999.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xcol xcol3">
                                        <span class="hidden-xs">
                                            <a href="#" class="btn-delete" title="Eliminar producto" role="button"></a>
                                        </span>
                                        <span class="visible-xs">
                                            <a href="#" title="Eliminar producto">Eliminar</a>
                                        </span>
                                    </div>
                                </div>

                                <div class="xrow">
                                    <div class="xcol xcol1">
                                        <div class="ytable">
                                            <div class="yrow">
                                                <div class="ycol ycol1">
                                                    <figure class="iproduct-image">
                                                        <a href="product.html">
                                                            <img src="assets/images/products/cart/product1.jpg" alt="Product">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="ycol ycol2">
                                                    <p>Polo Batman: El Caballero de la Noche Regresa<br>Cód: KPHB0000001<br>Talla: L</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xcol xcol2">
                                        <div class="ytable">
                                            <div class="yrow">
                                                <div class="ycol ycol3">
                                                    <input class="cart-product-quantity form-control" type="text">
                                                </div>
                                                <div class="ycol ycol4">
                                                    S/ 999.00
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="xcol xcol3">
                                        <span class="hidden-xs">
                                            <a href="#" class="btn-delete" title="Eliminar producto" role="button"></a>
                                        </span>
                                        <span class="visible-xs">
                                            <a href="#" title="Eliminar producto">Eliminar</a>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-7">
                                    <div class="cart-discount">
                                        <h3>Cupón de descuento</h3>
                                        <p>Introduzca el código y haga clic en el botón "APLICAR" para actualizar el total.</p>
                                        <form action="#">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Escribe aquí el código...">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn">Aplicar</button>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="cart-proceed">

                                        <div class="jtable">
                                            <div class="jrow">
                                                <div class="jcol">
                                                    <p class="cart-subtotal">Sub Total:</p>
                                                </div>
                                                <div class="jcol">
                                                    <p class="cart-subtotal">S/ 999</p>
                                                </div>
                                            </div>
                                            <div class="jrow">
                                                <div class="jcol">
                                                    <p class="cart-subtotal">Costo de Envío:</p>
                                                </div>
                                                <div class="jcol">
                                                    <p class="cart-subtotal">Gratis</p>
                                                </div>
                                            </div>
                                            <div class="jrow">
                                                <div class="jcol">
                                                    <p class="cart-total">Total a Pagar:</p>
                                                </div>
                                                <div class="jcol">
                                                    <p class="cart-total"><span class="text-accent">S/ 999.00</span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-primary">Continuar con mi compra</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <aside class="col-md-3 col-md-pull-9 sidebar sidebar-shop">

                        <div class="widget widget-banner">
                            <div class="banner banner-image">
                                <a href="#" title="Brown Woman Shoes">
                                    <img src="assets/images/sample.jpg" alt ="Oferta">
                                </a>
                            </div>
                        </div>

                        <div class="widget widget-testimonial">
                            <h3 class="carousel-title">Súper Héroes</h3>
                            <div class="owl-data-carousel owl-carousel" data-owl-settings='{ "items":1, "nav": true, "dots":false, "autoplayTimeout":6500 }' data-owl-responsive='{ "0": {"items": 1}, "480": {"items": 2}, "768": {"items": 3}, "992": {"items": 1}, "1200": {"items": 1} }'>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product1.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>

                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Batman<br>The Dark Knight Returns</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product2.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>

                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Superman<br>Man of Steel</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product3.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Flash<br>Nuevo Universo DC</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product4.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Game Of Thrones<br>Winter is coming</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product5.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Wonder Woman<br>Logo Clásico</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product6.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Super Girl<br>Man of Steel</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="widget widget-testimonial">
                            <h3 class="carousel-title">Súper Heroínas</h3>
                            <div class="owl-data-carousel owl-carousel" data-owl-settings='{ "items":1, "nav": true, "dots":false, "autoplayTimeout":6500 }' data-owl-responsive='{ "0": {"items": 1}, "480": {"items": 2}, "768": {"items": 3}, "992": {"items": 1}, "1200": {"items": 1} }'>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product1.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>

                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Batman<br>The Dark Knight Returns</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product2.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>

                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Superman<br>Man of Steel</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product3.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Flash<br>Nuevo Universo DC</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product4.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Game Of Thrones<br>Winter is coming</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product5.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Wonder Woman<br>Logo Clásico</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                                <div class="product">
                                    <figure class="product-image-container">
                                        <a href="product.html" title="Product Name" class="product-image-link">
                                            <img src="assets/images/products/product6.jpg" width="195" height="255" alt="Product Image">
                                        </a>
                                        <span class="product-label">-55%</span>
                                        <!-- a href="#" class="btn-quick-view"><i class="i-eye"></i> Vista rápida</a -->
                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-wishlist" title="Add to Wishlist">
                                                <i class="icon-product icon-heart"></i>
                                            </a>
                                            <a href="#" class="btn-product btn-add-cart" title="Ver Detalles">
                                                <i class="icon-product icon-bag"></i>
                                                <span>Ver Detalles</span>
                                            </a>
                                            <a href="#" class="btn-product btn-compare" title="Add to Compare">
                                                <i class="icon-product icon-bar"></i>
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="title">
                                        <a href="product.html">
                                            <div>
                                                <div class="product-title">
                                                    <h2>Polo Super Girl<br>Man of Steel</h2>
                                                </div>
                                                <div class="product-price-container">
                                                    <!-- span class="old product-price">S/ 50.00</span -->
                                                    <span class="new product-price">S/ 45.00</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </aside>

                </div><!-- End .row -->
            </div><!-- End .container -->
        </div>

        <div class="pak">
            <div class="subs-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-lg-6 col-lg-offset-3 col-xs-12">
                            <div class="section-title section-title-3">
                                <h2>¿Quieres recibir las últimas novedades?</h2>
                                <p>Suscríbete hoy y recibe nuestras novedades y ofertas exclusivas antes que todos. Ingresa tu correo para suscribirte.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#">
                                <div class="newsletter-form">
                                    <div>
                                        <input type="email" name="email" placeholder="Correo Electrónico...">
                                    </div>
                                    <div>
                                        <button class="subscribe-btn btn btn-primary" type="submit">Suscríbete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">

            <section class="promos">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-lg-4">
                            <div class="free-shipping">
                                <div class="box">
                                    <div>
                                        <i class="i-truck3"></i>
                                    </div>
                                    <div>
                                        <h3>Entrega Rápida y Segura</h3>
                                        <p>Le enviamos a su correo un código para el seguimiento de su pedido. Recibirá su producto antes de 48 horas.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="world-shipping">
                                <div class="box">
                                    <div>
                                        <i class="i-eshop2"></i>
                                    </div>
                                    <div>
                                        <h3>Compra Fácil y Seguro</h3>
                                        <p>Desde la comodidad de su casa u oficina. Desde cualquier dispositivo electrónico. En cualquier Hora y día de la semana.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="low-price">
                                <div class="box">
                                    <div>
                                        <i class="i-peru"></i>
                                    </div>
                                    <div>
                                        <h3>Envíos a Nivel Nacional</h3>
                                        <p>Enviamos sus pedidos a todo el país a través de Olva Courier. Envíos gratis sólo dentro de Lima Metropolitana.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="low-price">
                                <div class="box">
                                    <div>
                                        <i class="i-chat2"></i>
                                    </div>
                                    <div>
                                        <h3>Postventa</h3>
                                        <p>Todas sus consultas las puede realizar a través de nuestro número: 997250279, Whatsapp, Fanpage o Correo electrónico.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="low-price">
                                <div class="box">
                                    <div>
                                        <i class="i-like"></i>
                                    </div>
                                    <div>
                                        <h3>Calidad de Productos</h3>
                                        <p>Es nuestro compromiso entregarle el mejor producto con la mejor calidad del mercado.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <div class="low-price">
                                <div class="box border-top">
                                    <div>
                                        <i class="i-medal1"></i>
                                    </div>
                                    <div>
                                        <h3>Garantía</h3>
                                        <p>Ante cualquier imprevisto podemos hacerle el cambio del producto previa coordinación.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="footer-inner">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-newsletter">
                                <img src="assets/images/logo-kuper.png" alt="Kuper.pe" title="Kuper.pe">
                                <div class="social-icons">
                                    <a href="#" class="social-icon" title="Facebook"><i class="i-facebook2"></i></a>
                                    <a href="#" class="social-icon" title="Twitter"><i class="i-twitter2"></i></a>
                                    <a href="#" class="social-icon" title="Linkedin"><i class="i-instagram2"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title">Kuper</h4>

                                <ul class="links">
                                    <li><a href="#">Nosotros</a></li>
                                    <li><a href="#">Políticas de Envío</a></li>
                                    <li><a href="#">Formas de Pago</a></li>
                                    <li><a href="#">Mapa del sitio</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="widget">
                                <h4 class="widget-title">Categorías</h4>

                                <ul class="links">
                                    <li><a href="#">Hombres</a></li>
                                    <li><a href="#">Mujeres</a></li>
                                    <li><a href="#">Temáticas</a></li>
                                    <li><a href="#">Ofertas</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <div class="widget widget-about">
                                <h4 class="widget-title">Contáctenos</h4>

                                <address>
                                    <span><a href="mailto:info@domain.com" class="i-email3"> contacto@kuper.pe</a></span>
                                    <span><a href="tel:+511997250279" class="i-phone1"> 997250279</a></span>
                                    <span class="i-time4"> Horario de atención:<br>De Lunes a Domingo las 24h</span>
                                </address>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-push-6 tarc">
                            <img src="assets/images/cards.png" alt="Payment Methods" class="img-cards">
                        </div>
                        <div class="col-md-6 col-md-pull-6">
                            <p class="copyright">Kuper EIRL &copy; 2017. Todos los derechos reservados.</p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>

    </div>
</div>

<a id="scroll-top" href="#top" title="Scroll top"><i class="i-up1"></i></a>

<div off-canvas="slidebar left overlay">
    <aside class="sidemenu">
        <div class="sidemenu-wrapper">
            <div class="sidemenu-header">
                <a href="index.html" class="sidemenu-logo">
                    <img src="assets/images/kuper-logo.png" alt="logo">
                </a>
            </div>
            <ul class="metismenu">
                <li>
                    <div class="top-search">
                        <form>
                            <input type="text" placeholder="Buscar producto...">
                            <button type="submit"><i class="i-search1"></i></button>
                        </form>
                    </div>
                </li>
                <li><a href="index.html" class="i-home"> Inicio</a></li>
                <li><a href="index.html">Nosotros</a></li>
                <li>
                    <a href="#" aria-expanded="false">Hombres<span class="sidemenu-icon"></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="about.html">Todo</a></li>
                        <li><a href="404.html">Polos</a></li>
                        <li><a href="contact.html">Poleras</a></li>
                        <li><a href="contact.html">Manga Raglán</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" aria-expanded="false">Mujeres<span class="sidemenu-icon"></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="about.html">Todo</a></li>
                        <li><a href="404.html">Polos</a></li>
                        <li><a href="contact.html">Poleras</a></li>
                        <li><a href="contact.html">Manga Raglán</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#" aria-expanded="false">Temáticas<span class="sidemenu-icon"></span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li><a href="portfolio-2col.html">Todo</a></li>
                        <li><a href="portfolio-3col.html">Villanos</a></li>
                        <li><a href="portfolio-4col.html">Star Wars</a></li>
                        <li><a href="single-portfolio.html">Marvel Comics</a></li>
                        <li><a href="single-portfolio.html">DC Comics</a></li>
                        <li><a href="single-portfolio.html">Series</a></li>
                        <li><a href="single-portfolio.html">Vengadores</a></li>
                        <li><a href="single-portfolio.html">Liga de la Justicia</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Ofertas</a>
                </li>
                <li><a href="contact.html">Contacto</a></li>
                <li>
                    <div class="social-movil">
                        <a href="#" target="_blank"><i class="i-facebook1"></i></a>
                        <a href="#" target="_blank"><i class="i-twitter1"></i></a>
                        <a href="#" target="_blank"><i class="i-instagram2"></i></a>
                        <a href="whatsapp://send?text=Ingresa%20a%20Kuper.pe%2C%20tu%20mejor%20opci%C3%B3n%20en%20polos%20de%20super%20h%C3%A9roes%2C%20villanos%20y%20tus%20series%20favoritas%20de%20TV - http%3A%2F%2Fkuper.pe%2F"><i class="i-whatsapp"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </aside>
</div>

<div class="modal fade" tabindex="-1" role="dialog" id="subs">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="i-close"></i>
            </button>
            <div class="pak pak2">
                <div class="subs-section">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title section-title-3">
                                <h2>¿Quieres recibir las últimas novedades?</h2>
                                <p>Suscríbete hoy y recibe nuestras novedades y ofertas exclusivas antes que todos. Ingresa tu correo para suscribirte.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="#">
                                <div class="newsletter-form">
                                    <div>
                                        <input type="email" name="email" placeholder="Correo Electrónico...">
                                    </div>
                                    <div>
                                        <button class="subscribe-btn btn btn-primary" type="submit">Suscríbete</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="no-show">No volver a ver este mensaje.</div>
            </div>
        </div>
    </div>
  </div>
</div>

<!-- End -->
<!-- script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
@endsection