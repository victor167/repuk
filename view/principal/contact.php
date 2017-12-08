@extends('principal/indexparent');

@section('title','Contacto - Kuper');
@section('content')
<div class="main2">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="content">
                    <div class="breads">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html"><i class="i-home"></i> Inicio</a>
                            </li>
                            <li class="active">
                                Contacto
                            </li>
                        </ol>
                    </div>
                    <div class="page-header text-center">
                        <h2>Contáctenos</h2>
                        <p>A través de los siguientes medios.</p>
                    </div>

                    <div class="mb20"></div>

                    <div class="row">
                        <div class="col-sm-4">
                            <div class="contact-info-box">
                                <i class="i-pin1"></i>
                                <h3>Oficina</h3>
                                <address>
                                    <span>Calle Los Rubíes</span>
                                    <span>Mz. C lote 25 / Los Olivos</span>
                                    <span>Lima - Perú</span>
                                </address>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-info-box">
                                <i class="i-email1"></i>
                                <h3>Correo Electrónico</h3>
                                <p><a href="mailto:#">contacto@kuper.pe</a></p>
                                <p><a href="mailto:#">info@kuper.pe</a></p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-info-box">
                                <i class="i-phone2"></i>
                                <h3>Teléfono</h3>
                                <p><strong class="whats i-whatsapp">Whatsapp</strong></p>
                                <p><strong>Ventas:</strong></p>
                                <p>997 250 279</p>

                            </div>
                        </div>
                    </div>

                    <div class="mb20-sm"></div>

                    <div class="title-group text-center">
                        <h2 class="title">Formulario</h2>
                        <p class="title-desc">Escriba su mensaje y le responderemos lo más pronto posible.</p>
                    </div>

                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Nombre y Apellido</label>
                                    <input type="text" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Correo electrónico</label>
                                    <input type="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <label>Teléfono</label>
                                    <input type="phone" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Mensaje</label>
                                    <textarea cols="30" rows="6" class="form-control" placeholder="Escribe aquí tu mensaje..." required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix text-right">
                            <input type="submit" class="btn btn-primary min-width" value="Enviar Mensaje">
                            <!-- button class="btn btn-primary min-width">Enviar Mensaje</button -->
                        </div>
                    </form>

                    <div class="title-group text-center">
                        <h2 class="title">Ubicación</h2>
                        <p class="title-desc">Nuestra oficina administrativa.</p>
                    </div>

                    <div id="map"></div>
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
        </div>
    </div>
</div>
@endsection()