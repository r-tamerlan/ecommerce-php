<?php require_once "components/header.php"; ?>
        <!-- ========== MAIN CONTENT ========== -->
        <main id="content" role="main" class="cart-page">
            <!-- breadcrumb -->
            <div class="bg-gray-13 bg-md-transparent">
                <div class="container">
                    <!-- breadcrumb -->
                    <div class="my-md-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="http://localhost/MVC/site/home/homepage">Home</a></li>
                                <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Favoritlər</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- End breadcrumb -->
                </div>
            </div>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="mb-4">
                    <h1 class="text-center">💛 Favoritlər</h1>
                </div>
                <div class="mb-10 cart-table">
                    <form class="mb-4" action="#" method="post">
                        <table class="table" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="product-remove">&nbsp;</th>
                                    <th class="product-thumbnail">&nbsp;</th>
                                    <th class="product-name">Məhsul</th>
                                    <th class="product-price">Qiymət</th>
                                    <th class="product-quantity w-lg-15">Miqdar</th>
                                    <th class="product-subtotal">Cəmi</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            $cemitutar=0;
                            foreach ($data2 as $allFavProducts):
                                $favarrayimg = $allFavProducts["images"];
                                $favImage = explode("-", $favarrayimg);
                                $cemitutar+=$allFavProducts["productPrice"];
                                echo '<tr class="">
                                    <td class="text-center">
                                        <a href="http://localhost/MVC/site/favorit/deleteFavorit/'.$allFavProducts["productID"].'" class="text-gray-32 font-size-26" style="color: red">×</a>
                                    </td>
                                    <td class="d-none d-md-table-cell">
                                        <a href="http://localhost/MVC/site/product/showProduct/'.$allFavProducts["productID"].'"><img style="height: 100px" class="img-fluid max-width-100 p-1 border border-color-1" src="http://localhost/MVC/app/view/admin/assets/LocalStorage/' . $favImage[0] . '" alt="Image Description"></a>
                                    </td>

                                    <td data-title="Product">
                                        <a href="http://localhost/MVC/site/product/showProduct/'.$allFavProducts["productID"].'" class="text-gray-90">'.$allFavProducts["productName"].'</a>
                                    </td>

                                    <td data-title="Price">
                                        <span class="">'.$allFavProducts["productPrice"].' azn</span>
                                    </td>

                                    <td data-title="Quantity">
                                        <span class="sr-only">Sayı</span>
                                        <!-- Quantity -->
                                        <div class="border rounded-pill py-1 width-122 w-xl-80 px-3 border-color-1">
                                            <div class="js-quantity row align-items-center">
                                                <div class="col">
                                                    <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="1">
                                                </div>
                                                <div class="col-auto pr-1">
                                                    <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-minus btn-icon__inner"></small>
                                                    </a>
                                                    <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                        <small class="fas fa-plus btn-icon__inner"></small>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Quantity -->
                                    </td>

                                    <td data-title="Total">
                                        <span class="">'.$allFavProducts["productPrice"].' azn</span>
                                    </td>
                                </tr>';
                            endforeach;
                            ?>

                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="mb-8 cart-total">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 offset-lg-6 offset-xl-7 col-md-8 offset-md-4">
                            <div class="border-bottom border-color-1 mb-3">
                                <h3 class="d-inline-block section-title mb-0 pb-2 font-size-26">Cəmi hesab</h3>
                            </div>
                            <table class="table mb-3 mb-md-0">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>İlkin hesab</th>
                                        <td data-title="Subtotal"><span class="amount"><?php echo $cemitutar; ?> azn</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Çatdirilma</th>
                                        <td data-title="Shipping">
                                             <span class="amount">pulsuz</span>

                                        </td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Cəmi</th>
                                        <td data-title="Total"><strong><span class="amount"><?php echo $cemitutar; ?> azn</span></strong></td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="button" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-md-none">Nəzarətə davam edin</button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- ========== END MAIN CONTENT ========== -->
<?php require_once "components/footer.php"; ?>