@extends('principal/indexparent');

@section('title','Politicas - Kuper');
@section('content')

<div class="main2">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-md-push-3">
                <div class="content">
                    <div class="breads">
                        <ol class="breadcrumb">
                            <li>
                                <a href="index.html">Inicio</a>
                            </li>
                            <li class="active">
                                Políticas de Envío
                            </li>
                        </ol>
                    </div>
                    <div class="page-header text-center">
                        <h2>Políticas de Envío</h2>
                    </div>

                    <div class="history-section">
                        <div class="history-left">
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions...</p>

                            <ul class="timeline-list">
                                <li class="scroll-anim" data-anim="fadeInUp">
                                    <span class="timeline-date">Paso 1</span>
                                    <span class="timeline-dot"></span>
                                    <h3>Recepción</h3>
                                    <p>Recibimos el pedido y coordinamos con el cliente los tiempos y dirección de entrega.</p>
                                </li>

                                <li class="scroll-anim" data-anim="fadeInUp">
                                    <span class="timeline-date">Paso 2</span>
                                    <span class="timeline-dot"></span>
                                    <h3>Envío</h3>
                                    <p>Realizamos el envío a través de Olva Courier o Servientrega.</p>
                                </li>

                                <li class="scroll-anim" data-anim="fadeInUp">
                                    <span class="timeline-date">Paso 3</span>
                                    <span class="timeline-dot"></span>
                                    <h3>Entrega</h3>
                                    <p>Consultamos con el cliente si el pedido fue recepcionado.</p>
                                </li>
                            </ul>
                        </div>

                        <div class="history-right">
                            <img src="assets/images/about-img.jpg" alt="About image" class="img-responsive about-img">
                        </div>
                    </div>

                    <p class="lead">Realizamos nuestras entregas a nivel nacional.</p>

                    <p>Hacemos entregas a nivel nacional.</p>

                    <h2>Políticas de envío:</h2>
                    <p>Todos los envíos son hechos a través de Olva Courier.</p>
                    <p>Todos los pedidos de lunes a viernes recibidos antes de las <b>2 pm.</b> son despachados el mismo día.</p>
                    <p>Pasado las <b>2 pm.</b> son despachados al día útil siguiente.</p>
                    <p>Los pedido hechos durante los fines de semana <b>(Sab -Dom)</b> son enviados el día lunes.</p>

                    <h2>Costos:</h2>
                    <p>Todos los envíos dentro de Lima Metropolitana tienen un costo de S/ 5.00</p>
                    <p>Los envíos a Callao tienen un costo de S/. 6 soles</p>
                    <p>Los envíos al resto del país tienen un costo de S/. 15  Soles.</p>

                    <h2>Tiempo de entrega</h2>
                    <p>Para Lima entre 1 y 3 días útiles una vez enviado el pedido.</p>
                    <p>Para provincias entre 2 y 3 días útiles una vez enviado el pedido.</p>

                    <div class="mb20 mb10-xs"></div>
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