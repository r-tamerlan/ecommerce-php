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
                            <h4 class="p-0 m-0">Users List</h4>
                        </div>


                        <div class="col-xl-4 col-md-4 col-sm-4 col-4 text-right">
                            <a href="http://localhost/MVC/admin/users/createuser" type="button" class="btn btn-dark small">+ Add</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="widget-content widget-content-area">

                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                        <thead>

                        <tr>
                            <th class="">#id</th>
                            <th class="">Image</th>
                            <th class="">Name</th>
                            <th class="">Surname</th>
                            <th class="">Email</th>
                            <th class="">Password</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        foreach ($data as $netice):

                            echo '<tr >
                                <td  >' . $netice["userID"] . '</td>  
                                <td class="text-center" ><span>
                                <img src="http://localhost/MVC/app/view/admin/assets/img/' . $netice["userImg"] . '" class="rounded-circle profile-img" alt="avatar">
                                </span></td> 
                                <td  >' . $netice["userName"] . '</td>                                                      
                                <td  >' . $netice["userSurname"] . '</td>                                                      
                                <td  >' . $netice["userEmail"] . '</td>                                                      
                                <td  >' . $netice["userPassword"] . '</td>
                                <td class="text-center">
                                    <ul class="table-controls">
                                        <li><a href="http://localhost/MVC/admin/users/editinguser/' . $netice["userID"] . '" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                        <li><a href="http://localhost/MVC/admin/users/deleteuser/' . $netice["userID"] . '" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                    </ul>
                                </td>
                                   </tr>';
                        endforeach;
                        ?>
                        </tbody>
                    </table>
                </div>
                <!-- *** Pagination Start *** -->
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info text-info" role="status" aria-live="polite">Showing page <span class="text-dark "><?php echo $data2; ?></span> of <span class="text-dark"><?php echo $GLOBALS["usersCemiseife"]; ?></span></div>
                </div>
                <div class="paginating-container pagination-solid">

                    <ul class="pagination">
                <?php
                echo '<li  class="prev"><a href="http://localhost/MVC/admin/users/users/' . ($data2 - 1) . '" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></a></li>';

                for ($i = 1; $i <= $GLOBALS["usersCemiseife"]; $i++) :
                    if ($i == $data2):
                        echo '<li class="active"><a href="http://localhost/MVC/admin/users/users/' . $i . '" >' . $i . '</a></li> ';
                    else:
                        echo '<li ><a href="http://localhost/MVC/admin/users/users/' . $i . '" >' . $i . '</a></li> ';
                    endif;
                endfor;

                echo '<li class="next"><a href="http://localhost/MVC/admin/users/users/' . ($data2 + 1) . '" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></a></li>';
                ?>
                    </ul>

                </div>
                <!-- *** Pagination End *** -->

            </div>
        </div>
        <!-- **** -->
    </div>
</div>
<?php require_once("components/footer.php"); ?>
