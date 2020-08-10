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
                                <h4 class="p-0 m-0">Categories List</h4>
                            </div>
                            <div class="col-xl-4 col-md-4 col-sm-4 col-4 text-right">
                                <a href="http://localhost/MVC/admin/categories/addcategory" type="button" class="btn btn-success small">+ Add</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area mt-4">

                        <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                            <thead>
                            <tr>

                                <th class="">#id</th>
                                <th class="">Name</th>
                                <th class="">Enable/Disable</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody >
                            <?php

                            foreach ( $data as $netice):
                                if ($netice["visible"]==1):
                                $visible="On";
                                else:
                                $visible="Off";
                                endif;
                                echo '<tr >

                                <td  >' . $netice["c_id"] . '</td>
                                <td>' . $netice["categoryName"] . '</td>
                                <td>' . $visible . '</td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="http://localhost/MVC/admin/categories/editingcategory/' . $netice["c_id"] . '" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="http://localhost/MVC/admin/categories/deletecetegory/' . $netice["c_id"] . '" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                    </ul>
                                </td>
                                       </tr>';
                            endforeach;
                            ?>
                            </tbody>
                        </table>

                </div>
            </div>
            <!-- **** -->
        </div>
    </div>

<?php require_once('components/footer.php'); ?>