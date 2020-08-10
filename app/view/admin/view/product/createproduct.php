<?php
require_once("components/header.php");


?>
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Add Product</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
        <form action="http://localhost/MVC/admin/product/savecreateproduct" method="post"  enctype="multipart/form-data">
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Choose Category</label>
                            <select name="p_kategoriya" class="form-control form-control-sm">
                                <?php
                                foreach ($data as $netice):
                                    echo '<option value="' . $netice["c_id"] . '">' . $netice["categoryName"] . '</option>';
                                endforeach;
                                ?>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Product Name..."
                                   required="required">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Stock</label>
                            <input type="number" class="form-control" name="stock"
                                   required="required" value="1">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Info</label>
                            <div id="editor-container">
                                <input type="text" class="form-control" name="info" placeholder="Product Info..."
                                       required="required">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Price</label>
                            <input type="number" class="form-control" name="price"
                                   required="required" min="1" step="0.01">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Pistures</label>
                            <input type="file" class="form-control" name="upload[]" multiple required="required" >
                        </div>
                        <input type="submit" class="btn btn-primary" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once("components/footer.php"); ?>