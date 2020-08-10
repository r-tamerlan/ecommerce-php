<?php
require_once("components/header.php");
?>

<div class="row layout-top-spacing">
    <div class="col-lg-12 col-12  layout-spacing">
        <!-- **** -->
        <div class="statbox widget box box-shadow">
            <div class="widget-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-md-8 col-sm-8 col-8">
                            <h4 class="p-0 m-0">Orders Statistic</h4>
                        </div>
                    </div>
                </div>
            </div>
<!-- Statistic START -->


                    <div class="row mt-3">
                        <div class="col-xl-8 col-md-8 col-sm-8 col-8  text-left">
                            <h5 class="p-0  ml-3 text-secondary">All orders</h5>
                        </div>
                        <div class="col-xl-4 col-md-4 col-sm-4 col-4 text-right" >
                            <h5 class="p-0 mr-3 text-secondary">Current date</h5>
                        </div>

                            <div class="col-xl-8 col-md-8 col-sm-8 col-8 mt-2 text-left">
                                <h5 class="p-0 ml-3 text-success " ><?php echo count($data);  ?></h5>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-4 mt-2 text-right" >
                                <h5 class="p-0 mr-3 text-success " ><?php echo date("Y.m.d"); ?></h5>
                            </div>

                </div>


<!-- Statistic END -->
            <div class="widget-content widget-content-area">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                        <thead>

                        <tr>
                            <th class="">#id</th>
                            <th class="">Customer</th>
                            <th class="">Product</th>
                            <th class="">Count</th>
                            <th class="">Total Price</th>
                            <th class="">Order Date</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach ($data as $netice):

                            echo '<tr >
                                <td  >' . $netice["id"] . '</td> 
                                <td  >' . $netice["userName"] . ' ' . $netice["userSurname"] . '</td>                                                      
                                <td  >' . $netice["productName"] . '</td>                                                      
                                <td class="text-center" >' . $netice["count"] . '</td>                                                      
                                <td >' . $netice["total_price"].' azn</td>
                                <td class="text-center" >' . $netice["order_date"] . '</td>     
                                <td class="text-center">
                                    <ul class="table-controls text-center" >                                                                       
                                        <li><a href="http://localhost/MVC/admin/orders/orders/deleteorders/' . $netice["id"] . '" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                    </ul>
                                </td>
                                   </tr>';
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- *** Pagination Start *** -->
                <div class="paginating-container pagination-solid">

                    <ul class="pagination">
                        <li  class="prev"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a></li>
                        <li><a href="javascript:void(0);">1</a></li>
                        <li class="active"><a href="javascript:void(0);">2</a></li>
                        <li><a href="javascript:void(0);">3</a></li>
                        <li class="next"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a></li>
                    </ul>

                </div>
                <!-- *** Pagination End *** -->

            </div>
        </div>
        <!-- **** -->
    </div>
</div>
<?php require_once("components/footer.php"); ?>
