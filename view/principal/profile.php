@extends('principal/indexparent');

@section('title','Perfil - Kuper');
@section('content')
<div class="main2">
    <div class="container">
        <div class="content">
            <div class="breads hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html"><i class="i-home"></i> Inicio</a>
                    </li>
                    <li>
                        Ingresar
                    </li>
                    <li class="active">
                        Mi cuenta
                    </li>
                </ol>
            </div>

            <div class="page-header text-center">
                <h2>David Soriano</h2>
                <p>Si no esta registrado puede hacerlo fácil y rápido a través de nuestro formulario de registro.</p>
            </div>
        </div>
        <div class="clearfix mb30-sm"></div>
        <div class="tabs-vertical-env">
            <ul class="nav tabs-vertical">
                <li class="active">
                    <a href="#v-home" data-toggle="tab" aria-expanded="true">
                        <i class="i-user3"></i>
                        <span class="hidden-xs">Datos personales</span>
                    </a>
                </li>
                <li class="">
                    <a href="#v-profile" data-toggle="tab" aria-expanded="false">
                        <i class="i-list2"></i>
                        <span class="hidden-xs">Lista de direcciones</span>
                    </a>
                </li>
                <li class="">
                    <a href="#v-messages" data-toggle="tab" aria-expanded="false">
                        <i class="i-heart1"></i>
                        <span class="hidden-xs">Lista de favoritos</span>
                    </a>
                </li>
                <li class="">
                    <a href="#v-settings" data-toggle="tab" aria-expanded="false">
                        <i class="i-shop"></i>
                        <span class="hidden-xs">Lista de pedidos</span>
                    </a>
                </li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane active" id="v-home">
                    <form action="#">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" required="" value="David Stiward">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Apellido Paterno</label>
                                    <input type="text" class="form-control" required="" value="Soriano">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Apellido Materno</label>
                                    <input type="text" class="form-control" required="" value="Alfaro">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>DNI</label>
                                    <input type="text" class="form-control" required="" value="41730474">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Género</label>
                                    <select class="form-control custom-select">
                                        <option value="unspecified">Seleccionar</option>
                                        <option value="male" selected>Masculino</option>
                                        <option value="female">Femenino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Fecha de nacimiento</label>
                                    <div class="input-group date">
                                        <input type="text" class="form-control" value="21/12/1982">
                                        <span class="input-group-addon">
															<i class="i-calendar"></i>
														</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Celular</label>
                                    <input type="text" class="form-control" required="" value="997250279">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control" required="" value="dstiwardsoriano@gmail.com">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <button class="btn btn-success min-width mb30-xs">Cambiar E-mail</button>
                            </div>

                            <div class="col-sm-12">
                                <!-- input type="submit" class="btn btn-primary min-width" value="GUARDAR CAMBIOS" -->
                                <button class="btn btn-primary min-width">GUARDAR CAMBIOS</button>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group mt25 mb0">
                                    <label>Contraseña Actual</label>
                                    <input type="password" class="form-control" required="" value="*******">
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group mt25 mb0">
                                    <button class="btn btn-success min-width">Cambiar tu Contraseña</button>
                                </div>
                            </div>

                        </div>

                    </form>
                </div>
                <div class="tab-pane" id="v-profile">
                    <p>Fulfilled direction use continual set him propriety continued. Saw met applauded favourite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashwoods see frankness objection abilities the. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed add screened rendered six say his striking confined. </p>
                </div>
                <div class="tab-pane" id="v-messages">
                    <p>When be draw drew ye. Defective in do recommend suffering. House it seven in spoil tiled court. Sister others marked fat missed did out use. Alteration possession dispatched collecting instrument travelling he or on. Snug give made at spot or late that mr. </p>
                </div>
                <div class="tab-pane" id="v-settings">
                    <p>Luckily friends do ashamed to do suppose. Tried meant mr smile so. Exquisite behaviour as to middleton perfectly. Chicken no wishing waiting am. Say concerns dwelling graceful six humoured. Whether mr up savings talking an. Active mutual nor father mother exeter change six did all. </p>
                </div>
            </div>
        </div>

        <h3 class="carousel-title">Nuevos lanzamientos</h3>
        <div class="owl-data-carousel owl-carousel" data-owl-settings='{"autoplayTimeout":6500}'>

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
        <div class="mb30"></div>

    </div>
</div>

@endsection()