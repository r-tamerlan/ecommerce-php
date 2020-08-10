<?php
require_once("components/header.php");

?>
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Add Category</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="http://localhost/MVC/admin/categories/saveaddcategory" method="post" >
                        <input type="hidden" name="action" value="add">
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Kateqory name</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput1"
                                   placeholder="Kateqory name" required="required">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Kategory visible: Show\Hide</label><br>
                            <label class="switch s-icons s-outline  s-outline-info  mb-4 mr-2">
                                <input type="checkbox" name="visible" value="ok" checked>
                                <span class="slider round"></span>
                            </label>
                        </div>
                        <input type="submit"  class="btn btn-success" value="+ Add">
                    </form>

                </div>
            </div>
        </div>
    </div>
<?php require_once("components/footer.php"); ?>