<?php
require_once("components/header.php");


?>
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit Product</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="http://localhost/MVC/admin/product/saveeditproduct" method="post" enctype="multipart/form-data">
                        <?php
                        foreach ($data as $netice):
                            echo '
                            <div class="form-group mb-4">  
                            <label for="formGroupExampleInput">Product id:  </label> 
                            <input type="hidden" name="proid" value="'.$netice["productID"].'">                         
                            <input type="text"   value="'.$netice["productID"].'" disabled style="width: 25px; border-radius: 5px; color: darkgreen; text-align: center; text-">
                                  </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Choose Category</label>
                            <select name="p_kategoriya" class="form-control form-control-sm">';
                            foreach ($data2 as $netice2):
                                if ($netice2["c_id"]==$netice["CategoryID"]):
                                echo '<option  value="' . $netice2["c_id"] . '" selected>' . $netice2["categoryName"] . '</option>';
                                else:
                                    echo '<option  value="' . $netice2["c_id"] . '">' . $netice2["categoryName"] . '</option>';
                                endif;
                            endforeach;
                            echo ' 
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Product Name..."
                                   required="required" value="' . $netice["productName"] . '">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Stock</label>
                            <input type="number" class="form-control" name="stock"
                                   required="required" value="' . $netice["productStock"] . '">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Info</label>
                            <div id="editor-container">
                                <input type="text" class="form-control" name="info" placeholder="Product Info..."
                                       required="required" value="' . $netice["productInfo"] . '">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Price</label>
                            <input type="number" class="form-control" name="price"
                                   required="required" value="' . $netice["productPrice"] . '">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">Product Pistures</label>
                            <input type="file" class="form-control" name="upload[]" required="required" multiple >
                            <input type="hidden" name="pictures_picturesID" value="' . $netice["id"] . '">
                        </div>';
                        endforeach;
                        ?>
                        <input type="submit" name="postsave" class="btn btn-primary" value="Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once("components/footer.php"); ?>