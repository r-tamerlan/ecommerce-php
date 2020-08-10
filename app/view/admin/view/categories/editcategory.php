<?php
require_once("components/header.php");

?>
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit Category</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="http://localhost/MVC/admin/categories/saveeditcategory" method="post" >
                        <input type="hidden" name="action" value="add">
                        <?php
                        foreach ($data as  $netice):
                            if ($netice["visible"]==1):
                                $netice2="checked";
                            else:
                                $netice2="";
                            endif;
                            echo '<div class="form-group mb-4">  
                            <label for="formGroupExampleInput">Kateqory id:  </label> 
                            <input type="hidden" name="id" value="'.$netice["c_id"].'">                         
                            <input type="text"   value="'.$netice["c_id"].'" disabled style="width: 25px; border-radius: 5px; color: darkgreen; text-align: center; text-">
                                  </div>
                                  <div class="form-group mb-4">  
                            <label for="formGroupExampleInput">Kateqory name</label>                          
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput1"
                                   placeholder="Kateqory name" required="required" value="'.$netice["categoryName"].'">
                                  </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Kategory visible: Show\Hide</label><br>
                            <label class="switch s-icons s-outline  s-outline-info  mb-4 mr-2">
                                <input type="checkbox" name="visible" value="ok" '.$netice2.'>
                                <span class="slider round"></span>
                            </label>
                        </div>';
                        endforeach;


                        ?>

                        <input type="submit"  class="btn btn-warning" value="Update">
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php require_once("components/footer.php"); ?>