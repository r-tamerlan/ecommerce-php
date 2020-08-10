<?php require_once "components/header.php"; ?>
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a
                                    href="../home/index.html">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active"
                            aria-current="page"><?php echo $data3["categoryName"]; ?></li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
    <div class="row mb-8">
    <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
    <div class="mb-8 border border-width-2 border-color-3 borders-radius-6">
        <!-- List -->
        <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar">
            <li>
                <a class="dropdown-toggle dropdown-toggle-collapse dropdown-title" href="javascript:;"
                   role="button" data-toggle="collapse" aria-expanded="false"
                   aria-controls="sidebarNav1Collapse" data-target="#sidebarNav1Collapse">
                    Bütün kateqoriyalrı gör
                </a>

                <div id="sidebarNav1Collapse" class="collapse" data-parent="#sidebarNav">
                    <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                        <!-- Menu List -->
                        <?php
                        foreach ($data as $categoriy):
                            echo '<li><a class="dropdown-item" href="http://localhost/MVC/site/product/getcategories/' . $categoriy["c_id"] . '">' . $categoriy["categoryName"] . '<span class="text-gray-25 font-size-12 font-weight-normal"></span></a></li> ';
                        endforeach;
                        ?>
                        <!-- End Menu List -->
                    </ul>
                </div>
            </li>
            <li>
                <a class="dropdown-current active" href="#"><?php echo $data3["categoryName"]; ?> <span
                            class="text-gray-25 font-size-12 font-weight-normal"> <?php echo ' (' . count($data2) . ')'; ?></span></a>


            </li>
        </ul>
        <!-- End List -->
    </div>
    <div class="mb-6">
        <div class="border-bottom border-color-1 mb-5">
            <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Filters</h3>
        </div>
        <div class="border-bottom pb-4 mb-4">
            <h4 class="font-size-14 mb-3 font-weight-bold">Brands</h4>

            <!-- Checkboxes -->
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brandAdidas">
                    <label class="custom-control-label" for="brandAdidas">Adidas
                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                    </label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brandNewBalance">
                    <label class="custom-control-label" for="brandNewBalance">New Balance
                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                    </label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brandNike">
                    <label class="custom-control-label" for="brandNike">Nike
                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                    </label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brandFredPerry">
                    <label class="custom-control-label" for="brandFredPerry">Fred Perry
                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                    </label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="brandTnf">
                    <label class="custom-control-label" for="brandTnf">The North Face
                        <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                    </label>
                </div>
            </div>
            <!-- End Checkboxes -->

            <!-- View More - Collapse -->
            <div class="collapse" id="collapseBrand">
                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="brandGucci">
                        <label class="custom-control-label" for="brandGucci">Gucci
                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                        </label>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="brandMango">
                        <label class="custom-control-label" for="brandMango">Mango
                            <span class="text-gray-25 font-size-12 font-weight-normal"> (56)</span>
                        </label>
                    </div>
                </div>
            </div>
            <!-- End View More - Collapse -->

            <!-- Link -->
            <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2"
               data-toggle="collapse" href="#collapseBrand" role="button" aria-expanded="false"
               aria-controls="collapseBrand">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                <span class="link-collapse__default">Show more</span>
                <span class="link-collapse__active">Show less</span>
            </a>
            <!-- End Link -->
        </div>
        <div class="border-bottom pb-4 mb-4">
            <h4 class="font-size-14 mb-3 font-weight-bold">Color</h4>

            <!-- Checkboxes -->
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryTshirt">
                    <label class="custom-control-label" for="categoryTshirt">Black <span
                                class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryShoes">
                    <label class="custom-control-label" for="categoryShoes">Black Leather <span
                                class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryAccessories">
                    <label class="custom-control-label" for="categoryAccessories">Black with Red <span
                                class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryTops">
                    <label class="custom-control-label" for="categoryTops">Gold <span
                                class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="categoryBottom">
                    <label class="custom-control-label" for="categoryBottom">Spacegrey <span
                                class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                </div>
            </div>
            <!-- End Checkboxes -->

            <!-- View More - Collapse -->
            <div class="collapse" id="collapseColor">
                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="categoryShorts">
                        <label class="custom-control-label" for="categoryShorts">Turquoise <span
                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="categoryHats">
                        <label class="custom-control-label" for="categoryHats">White <span
                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mb-2 pb-1">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="categorySocks">
                        <label class="custom-control-label" for="categorySocks">White with Gold <span
                                    class="text-gray-25 font-size-12 font-weight-normal"> (56)</span></label>
                    </div>
                </div>
            </div>
            <!-- End View More - Collapse -->

            <!-- Link -->
            <a class="link link-collapse small font-size-13 text-gray-27 d-inline-flex mt-2"
               data-toggle="collapse" href="#collapseColor" role="button" aria-expanded="false"
               aria-controls="collapseColor">
                                    <span class="link__icon text-gray-27 bg-white">
                                        <span class="link__icon-inner">+</span>
                                    </span>
                <span class="link-collapse__default">Show more</span>
                <span class="link-collapse__active">Show less</span>
            </a>
            <!-- End Link -->
        </div>
        <div class="range-slider">
            <h4 class="font-size-14 mb-3 font-weight-bold">Price</h4>
            <!-- Range Slider -->
            <input class="js-range-slider" type="text"
                   data-extra-classes="u-range-slider u-range-slider-indicator u-range-slider-grid"
                   data-type="double"
                   data-grid="false"
                   data-hide-from-to="true"
                   data-prefix="$"
                   data-min="0"
                   data-max="3456"
                   data-from="0"
                   data-to="3456"
                   data-result-min="#rangeSliderExample3MinResult"
                   data-result-max="#rangeSliderExample3MaxResult">
            <!-- End Range Slider -->
            <div class="mt-1 text-gray-111 d-flex mb-4">
                <span class="mr-0dot5">Price: </span>
                <span>$</span>
                <span id="rangeSliderExample3MinResult" class=""></span>
                <span class="mx-0dot5"> — </span>
                <span>$</span>
                <span id="rangeSliderExample3MaxResult" class=""></span>
            </div>
            <button type="submit" class="btn px-4 btn-primary-dark-w py-2 rounded-lg">Filter</button>
        </div>
    </div>
    <div class="mb-8">
    <div class="border-bottom border-color-1 mb-5">
        <h3 class="section-title section-title__sm mb-0 pb-2 font-size-18">Son məhsullar</h3>
    </div>
    <ul class="list-unstyled">
<?php
foreach ($data4 as $product):
    $arrayimg = $product["images"];
    $images = explode("-", $arrayimg);
    $starSS = $product["productRating"];
    for ($x = 1; $x <= $starSS; $x++):
        @$likeSS .= '<small class="fas fa-star"></small>';
    endfor;
    for ($y = 1; $y <= (5 - $starSS); $y++):
        @$unlikeSS .= '<small class="far fa-star text-muted"></small>';
    endfor;
    echo '<li class="mb-4">
                    <div class="row">
                        <div class="col-auto">
                            <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'" class="d-block width-75">
                                <img class="img-fluid" src="http://localhost/MVC/app/view/admin/assets/LocalStorage/' . $images[0] . '"
                                     alt="Image Description">
                            </a>
                        </div>
                        <div class="col">
                            <h3 class="text-lh-1dot2 font-size-14 mb-0"><a
                                        href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'">' . $product["productName"] . '</a></h3>
                            <div class="text-warning text-ls-n2 font-size-16 mb-1" style="width: 80px;">
                            '.$likeSS.$unlikeSS.'
                               
                            </div>
                            <div class="font-weight-bold">
                                <del class="font-size-11 text-gray-9 d-block">' . ($product["productPrice"] + 250) . ' </del>
                                <ins class="font-size-15 text-red text-decoration-none d-block">' . $product["productPrice"] . ' azn
                                </ins>
                            </div>
                        </div>
                    </div>
                </li>';
    endforeach;

    ?>
    </ul>
    </div>
    </div>
    <div class="col-xl-9 col-wd-9gdot5">
        <!-- Shop-control-bar Title -->
        <div class="d-block d-md-flex flex-center-between mb-3">
            <h3 class="font-size-25 mb-2 mb-md-0"><?php echo $data3["categoryName"]; ?></h3>
            <p class="font-size-14 text-gray-90 mb-0">Göstərilir: 1–10 kimi <strong class="text-warning"> <?php echo count($data2); ?></strong> nəticədən</p>
        </div>
        <!-- End shop-control-bar Title -->
        <!-- Shop-control-bar -->
        <div class="bg-gray-1 flex-center-between borders-radius-9 py-1">
            <div class="d-xl-none">
                <!-- Account Sidebar Toggle Button -->
                <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;"
                   role="button"
                   aria-controls="sidebarContent1"
                   aria-haspopup="true"
                   aria-expanded="false"
                   data-unfold-event="click"
                   data-unfold-hide-on-scroll="false"
                   data-unfold-target="#sidebarContent1"
                   data-unfold-type="css-animation"
                   data-unfold-animation-in="fadeInLeft"
                   data-unfold-animation-out="fadeOutLeft"
                   data-unfold-duration="500">
                    <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                </a>
                <!-- End Account Sidebar Toggle Button -->
            </div>
            <div class="px-3 d-none d-xl-block">
                <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill"
                           href="#pills-one-example1" role="tab" aria-controls="pills-one-example1"
                           aria-selected="false">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                <i class="fa fa-th"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-two-example1-tab" data-toggle="pill"
                           href="#pills-two-example1" role="tab" aria-controls="pills-two-example1"
                           aria-selected="false">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                <i class="fa fa-align-justify"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill"
                           href="#pills-three-example1" role="tab" aria-controls="pills-three-example1"
                           aria-selected="true">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                <i class="fa fa-list"></i>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-four-example1-tab" data-toggle="pill"
                           href="#pills-four-example1" role="tab" aria-controls="pills-four-example1"
                           aria-selected="true">
                            <div class="d-md-flex justify-content-md-center align-items-md-center">
                                <i class="fa fa-th-list"></i>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <form method="get">
                    <!-- Select -->
                    <select class="js-select selectpicker dropdown-select max-width-200 max-width-160-sm right-dropdown-0 px-2 px-xl-0"
                            data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                        <option value="one" selected>Standart düzülüş</option>
                        <option value="two">Sort by popularity</option>
                        <option value="three">Sort by average rating</option>
                        <option value="four">Sort by latest</option>
                        <option value="five">Sort by price: low to high</option>
                        <option value="six">Sort by price: high to low</option>
                    </select>
                    <!-- End Select -->
                </form>
                <form method="POST" class="ml-2 d-none d-xl-block">
                    <!-- Select -->
                    <select class="js-select selectpicker dropdown-select max-width-120"
                            data-style="btn-sm bg-white font-weight-normal py-2 border text-gray-20 bg-lg-down-transparent border-lg-down-0">
                        <option value="one" selected>Göstərilir 10</option>
                        <option value="two">Göstərilir 20</option>
                        <option value="three">Göstərilir 50</option>
                    </select>
                    <!-- End Select -->
                </form>
            </div>

        </div>
        <!-- End Shop-control-bar -->
        <!-- Shop Body -->

        <!-- Tab Content -->
        <div class="tab-content" id="pills-tabContent">
            <!-- ******************************************************************************************* -->
            <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel"
                 aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                <ul class="row list-unstyled products-group no-gutters">
                    <?php

                    foreach ($data2 as $product):
                        $arrayimg = $product["images"];
                        $images = explode("-", $arrayimg);
                        echo '
                                <li class="col-6 col-md-3 col-wd-2gdot4 product-item" style="height: 470px;">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-xl-4 p-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a
                                                            href="http://localhost/MVC/site/product/getcategories/'.$data3["c_id"] .'"
                                                            class="font-size-12 text-gray-5">' . $data3["categoryName"] . '</a></div>
                                                <h5 class="mb-1 product-item__title"><a
                                                            href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                                            class="text-blue font-weight-bold">' . $product["productName"] . '</a></h5>
                                                <div class="mb-2">
                                                    <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                                       class="d-block text-center"><img class="img-fluid"
                                                                                        src="http://localhost/MVC/app/view/admin/assets/LocalStorage/' . $images[0] . '"
                                                                                        alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">' . $product["productPrice"] . ' azn</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="http://localhost/MVC/site/favorit/addBasget/'.$product["productID"] .'" class="text-gray-6 font-size-13"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i> Müqasiə</a>
                                                    <a href="http://localhost/MVC/site/favorit/addFavorit/'.$product["productID"] .'-'.$_COOKIE["userId"].'" class="text-gray-6 font-size-13"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Favorit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>';
                    endforeach;
                    ?>

                </ul>
            </div>
            <!-- ******************************************************************************************* -->
            <div class="tab-pane fade pt-2" id="pills-two-example1" role="tabpanel"
                 aria-labelledby="pills-two-example1-tab" data-target-group="groups">
                <ul class="row list-unstyled products-group no-gutters">
                    <?php

                    foreach ($data2 as $product):
                        $arrayimg = $product["images"];
                        $images = explode("-", $arrayimg);
                        $stars = $product["productRating"];
                        for ($x = 1; $x <= $stars; $x++):
                            @$likes .= '<small class="fas fa-star"></small>';
                        endfor;
                        for ($y = 1; $y <= (5 - $stars); $y++):
                            @$unlikes .= '<small class="far fa-star text-muted"></small>';
                        endfor;
                        echo '<li class="col-6 col-md-3 col-wd-2gdot4 product-item" >
                <div class="product-item__outer h-100" >
                    <div class="product-item__inner px-xl-4 p-3">
                        <div class="product-item__body pb-xl-2">
                            <div class="mb-2"><a
                                        href="http://localhost/MVC/site/product/getcategories/'.$data3["c_id"] .'"
                                        class="font-size-12 text-gray-5">' . $data3["categoryName"] . '</a></div>
                            <h5 class="mb-1 product-item__title"><a
                                        href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                        class="text-blue font-weight-bold">' . $product["productName"] . '</a></h5>
                            <div class="mb-2">
                                <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                   class="d-block text-center"><img class="img-fluid"
                                                                    src="http://localhost/MVC/app/view/admin/assets/LocalStorage/' . $images[0] . '" 
                                                                    alt="Image Description"></a>
                            </div>
                            <div class="mb-3">
                                <a class="d-inline-flex align-items-center small font-size-14"
                                   href="#">
                                    <div class="text-warning mr-2">
                                    ' . $likes . $unlikes . '
                                      
                                    </div>
                                    <span class="text-secondary">(40)</span>
                                </a>
                            </div>
                            <ul class="font-size-12 p-0 text-gray-110 mb-4">
                                <li class="line-clamp-1 mb-1 list-bullet">Brand new and high
                                    quality
                                </li>
                                <li class="line-clamp-1 mb-1 list-bullet">Made of supreme quality,
                                    durable EVA crush resistant, anti-shock material.
                                </li>
                                <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28
                                    megapixel CMOS rear camera
                                </li>
                            </ul>
                            <div class="text-gray-20 mb-2 font-size-12">SKU: 0001x1</div>
                            <div class="flex-center-between mb-1">
                                <div class="prodcut-price">
                                    <div class="text-gray-100">' . $product["productPrice"] . ' azn</div>
                                </div>
                                <div class="d-none d-xl-block prodcut-add-cart">
                                    <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                       class="btn-add-cart btn-primary transition-3d-hover"><i
                                                class="ec ec-add-to-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="product-item__footer">
                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                <a href="../shop/compare.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                <a href="../shop/wishlist.html" class="text-gray-6 font-size-13"><i
                                            class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>';
                    endforeach;
                    ?>


                </ul>
            </div>
            <!-- ******************************************************************************************* -->
            <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel"
                 aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                <ul class="d-block list-unstyled products-group prodcut-list-view">

                    <?php

                    foreach ($data2 as $product):
                        $arrayimg = $product["images"];
                        $images = explode("-", $arrayimg);
                        $starX = $product["productRating"];
                        for ($x = 1; $x <= $starX; $x++):
                            @$likeXS .= '<small class="fas fa-star"></small>';
                        endfor;
                        for ($y = 1; $y <= (5 - $starX); $y++):
                            @$unlikeYS .= '<small class="far fa-star text-muted"></small>';
                        endfor;
                        echo '<li class="product-item remove-divider">
                <div class="product-item__outer w-100">
                    <div class="product-item__inner remove-prodcut-hover py-4 row">
                        <div class="product-item__header col-6 col-md-4">
                            <div class="mb-2">
                                <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                   class="d-block text-center"><img class="img-fluid"
                                                                    src="http://localhost/MVC/app/view/admin/assets/LocalStorage/' . $images[0] . '"
                                                                    alt="Image Description"></a>
                            </div>
                        </div>
                        <div class="product-item__body col-6 col-md-5">
                            <div class="pr-lg-10">
                                <div class="mb-2"><a
                                            href="http://localhost/MVC/site/product/getcategories/'.$data3["c_id"] .'"
                                            class="font-size-12 text-gray-5">' . $data3["categoryName"] . '</a></div>
                                <h5 class="mb-2 product-item__title"><a
                                            href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                            class="text-blue font-weight-bold">' . $product["productName"] . '</a></h5>
                                <div class="prodcut-price mb-2 d-md-none">
                                    <div class="text-gray-100">' . $product["productPrice"] . ' azn</div>
                                </div>
                                <div class="mb-3 d-none d-md-block">
                                    <a class="d-inline-flex align-items-center small font-size-14"
                                       href="#">
                                        <div class="text-warning mr-2">
                                        ' . $likeXS . $unlikeYS . '
                                           
                                        </div>
                                        <span class="text-secondary">(25)</span>
                                    </a>
                                </div>
                                <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                    <li class="line-clamp-1 mb-1 list-bullet">Brand new and high
                                        quality
                                    </li>
                                    <li class="line-clamp-1 mb-1 list-bullet">Made of supreme
                                        quality, durable EVA crush resistant, anti-shock material.
                                    </li>
                                    <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28
                                        megapixel CMOS rear camera
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="product-item__footer col-md-3 d-md-block">
                            <div class="mb-3">
                                <div class="prodcut-price mb-2">
                                    <div class="text-gray-100">' . $product["productPrice"] . ' azn</div>
                                </div>
                                <div class="prodcut-add-cart">
                                    <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                       class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Satın al</a>
                                </div>
                            </div>
                            <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                <a href="../shop/compare.html"
                                   class="text-gray-6 font-size-13 mx-wd-3"><i
                                            class="ec ec-compare mr-1 font-size-15"></i> Müqasiə</a>
                                <a href="../shop/wishlist.html"
                                   class="text-gray-6 font-size-13 mx-wd-3"><i
                                            class="ec ec-favorites mr-1 font-size-15"></i> Favorit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>';
                    endforeach;
                    ?>


                </ul>
            </div>
            <!-- ******************************************************************************************* -->
            <div class="tab-pane fade pt-2" id="pills-four-example1" role="tabpanel"
                 aria-labelledby="pills-four-example1-tab" data-target-group="groups">
                <ul class="d-block list-unstyled products-group prodcut-list-view-small">
                    <?php

                    foreach ($data2 as $product):
                        $arrayimg = $product["images"];
                        $images = explode("-", $arrayimg);
                        $star = $product["productRating"];
                        for ($x = 1; $x <= $star; $x++):
                            @$like .= '<small class="fas fa-star"></small>';
                        endfor;
                        for ($y = 1; $y <= (5 - $star); $y++):
                            @$unlike .= '<small class="far fa-star text-muted"></small>';
                        endfor;

                        echo '<li class="product-item remove-divider">
                                    <div class="product-item__outer w-100">
                                        <div class="product-item__inner remove-prodcut-hover py-4 row">
                                            <div class="product-item__header col-6 col-md-2">
                                                <div class="mb-2">
                                                    <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                                       class="d-block text-center">                                                      
                                    <img class="img-fluid" src="http://localhost/MVC/app/view/admin/assets/LocalStorage/' . $images[0] . '"   alt="Image Description">
                                                     </a>
                                                </div>
                                            </div>
                                            <div class="product-item__body col-6 col-md-7">
                                                <div class="pr-lg-10">
                                                    <div class="mb-2"><a
                                                                href="http://localhost/MVC/site/product/getcategories/'.$data3["c_id"] .'"
                                                                class="font-size-12 text-gray-5">' . $data3["categoryName"] . '</a></div>
                                                    <h5 class="mb-2 product-item__title"><a
                                                                href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                                                class="text-blue font-weight-bold">' . $product["productName"] . '</a></h5>
                                                    <div class="prodcut-price d-md-none">
                                                        <div class="text-gray-100">' . $product["productPrice"] . ' azn</div>
                                                    </div>
                                                    <ul class="font-size-12 p-0 text-gray-110 mb-4 d-none d-md-block">
                                                        <li class="line-clamp-1 mb-1 list-bullet">Brand new and high
                                                            quality
                                                        </li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">Made of supreme
                                                            quality, durable EVA crush resistant, anti-shock material.
                                                        </li>
                                                        <li class="line-clamp-1 mb-1 list-bullet">20 MP Electro and 28
                                                            megapixel CMOS rear camera
                                                        </li>
                                                    </ul>
                                                    <div class="mb-3 d-none d-md-block">
                                                        <a class="d-inline-flex align-items-center small font-size-14"
                                                           href="#">
                                                            <div class="text-warning mr-2">
                                                            ' . $like . $unlike . '
                                                              
                                                            </div>
                                                            <span class="text-secondary">(40)</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer col-md-3 d-md-block">
                                                <div class="mb-2 flex-center-between">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">' . $product["productPrice"] . ' azn</div>
                                                    </div>
                                                    <div class="prodcut-add-cart">
                                                        <a href="http://localhost/MVC/site/product/showProduct/'.$product["productID"] .'"
                                                           class="btn-add-cart btn-primary transition-3d-hover"><i
                                                                    class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap border-top pt-3">
                                                    <a href="../shop/compare.html"
                                                       class="text-gray-6 font-size-13 mx-wd-3"><i
                                                                class="ec ec-compare mr-1 font-size-15"></i> Müqasiə</a>
                                                    <a href="../shop/wishlist.html"
                                                       class="text-gray-6 font-size-13 mx-wd-3"><i
                                                                class="ec ec-favorites mr-1 font-size-15"></i> Favorit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>';
                    endforeach;
                    ?>
                </ul>
            </div>
            <!-- ******************************************************************************************* -->
        </div>
        <!-- End Tab Content -->

        <!-- End Shop Body -->
        <!-- Shop Pagination -->
        <nav class="d-md-flex justify-content-between align-items-center border-top pt-3"
             aria-label="Page navigation example">
            <div class="text-center text-md-left mb-3 mb-md-0">Göstərilir: 1–10  kimi <strong class="text-warning"> <?php echo count($data2); ?></strong> nəticədən</div>
            <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                <?php
for ($i = 1; $i <= $GLOBALS["Cemseyfe"]; $i++) :
    if ($i==$sitePage):
        echo '<li class="page-item"><a class="page-link current" href="http://localhost/MVC/site/product/getcategories/' .$data3["c_id"]. '">'.$i.'</a>
                 <input type="hidden" name="page" value="'.$i.'">
             </li>';
    else:
        echo '<li class="page-item"><a class="page-link" href="http://localhost/MVC/site/product/getcategories/' .$data3["c_id"]. '">'.$i.'</a>
                 <input type="hidden" name="page" value="'.$i.'">
             </li>
              ';
    endif;
    endfor;

                ?>
            </ul>
        </nav>
        <!-- End Shop Pagination -->
    </div>
    </div>

    </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->
    <?php require_once "components/footer.php"; ?>