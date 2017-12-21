@extends('principal/indexparent');

@section('title','Carrito de compras - Kuper');
@section('content')

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
@endsection()