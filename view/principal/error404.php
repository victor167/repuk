
@extends('principal/indexparent');

@section('title','Error 404 - Kuper');
@section('content')

    <div class="main2">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">

                    <div class="content error-page text-center">
                        <h2 class="first scroll-anim" data-anim="fadeInUp">404</h2>
                        <h2 class="scroll-anim" data-anim="fadeInUp">
                            Ups!
                        </h2>
                        <h3 class="scroll-anim" data-anim="fadeInUp" data-anim-delay="0.2s">Está página no ha sido encontrada.</h3>
                        <p class="scroll-anim" data-anim="fadeInUp" data-anim-delay="0.4s">Prueba utilizando nuestro buscador o vuelve al <a href="http://kuper.pe"><i class="i-home"></i> inicio</a> y navega en las distintas categorías.<br>Si necesitas ayuda, recuerda que puedes contactarte con nuestro <a href="tel:+511997250279"><i class="i-hset"></i> Servicio al Cliente</a>.</p>
                        <div class="top-search search2 scroll-anim" data-anim="fadeInUp" data-anim-delay="0.6s">
                            <form>
                                <input type="text" placeholder="Buscar producto...">
                                <button type="submit"><i class="i-search1"></i></button>
                            </form>
                        </div>
                        <p class="scroll-anim" data-anim="fadeInUp" data-anim-delay="0.4s">¡Sigue disfrutando de <a href="http://kuper.pe">Kuper.pe</a>!</p>
                    </div>
                </div>

                <aside class="col-md-3 col-md-pull-9 sidebar sidebar-shop">

                    <!-- div class="widget widget-banner">
                        <div class="banner banner-image">
                            <a href="#" title="Brown Woman Shoes">
                                <img src="assets/images/sample.jpg" alt ="Oferta">
                            </a>
                        </div>
                    </div -->

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