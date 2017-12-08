@extends('principal/indexparent');

@section('title','Formas de pago - Kuper');
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
                                Formas de Pago
                            </li>
                        </ol>
                    </div>
                    <div class="page-header text-center">
                        <h2>Formas de Pago</h2>
                    </div>

                    <div class="history-section">
                        <div class="history-left">
                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions...</p>
                            <div class="Cms">
                                <h2>BCP: Depósito o Transferencia bancaria</h2>
                                <p>Al elegir esta opción tienes los siguientes medios de pago:</p>
                                <ul>
                                    <li><b>Agente BCP:</b> Puedes pagarlo desde cualquiera agente a nivel nacional. Recuerda que si el depósito es de provincia deberás hacer un recargo de 7 Soles para poder enviar tu pedido. Este recargo lo cobra el banco en transferencias de provincia a Lima.</li>
                                    <li><b>Ventanilla BCP:</b> Puedes pagarlo desde cualquier ventanilla de oficinas BCP a nivel nacional. Recuerda que si el depósito es de provincia deberás hacer un recargo de 7 Soles para poder enviar tu pedido. Este recargo lo cobra el banco en transferencias de provincia a Lima.</li>
                                    <li><b>Banca Móvil BCP:</b> Si eres usuario del aplicativo, puedes hacernos una transferencia desde este medio. No tiene recargo.</li>
                                    <li><b>ViaBCP.com:</b> Puedes pagarlo también con una transferencia desde www.viabcp.com. No tiene recargo.</li>
                                    <li><b>Transferencia Interbancaria:</b> Puedes usar la web de tu banco para hacernos una transferencia. Recuerda que enviaremos tu pedido una vez que sea confirmado el depósito.</li>
                                </ul>
                                <h2>PAYU: Tarjeta de Crédito, Débito o Pago Efectivo (El Comercio)</h2>
                                <p>Al elegir esta opción tienes los siguientes medios de pago:</p>
                                <ul>
                                    <li><b>Tarjeta de Crédito o Débito:</b> Puedes pagarlo con Visa, Mastercard, American Express y Dinners.</li>
                                    <li><b>Pago Efectivo:</b> Genera un código CIP que podrás pagar desde tu banca online o la red de agentes de tu banco.</li>
                                    <li><b>Depósito BCP</b></li>
                                </ul>
                            </div>

                        </div>

                        <div class="history-right">
                            <img src="assets/images/about-img.jpg" alt="About image" class="img-responsive about-img">
                        </div>
                    </div>
                    <div class="mb20 mb10-xs"></div>
                </div>
            </div>

            <aside class="col-md-3 col-md-pull-9 sidebar sidebar-shop">

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