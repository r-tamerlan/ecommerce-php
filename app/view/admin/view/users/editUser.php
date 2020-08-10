<?php
require_once("components/header.php");


?>
    <div class="row layout-top-spacing">
        <div class="col-lg-12 col-12  layout-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Edit User</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area">
                    <form action="http://localhost/MVC/admin/users/saveedituser" method="post" enctype="multipart/form-data">
                        <?php
                        foreach ($data as $netice):

                        echo '
                        <div class="form-group mb-4">
                        <label for="formGroupExampleInput">User Image</label>
                        <input type="hidden" name="id" value="'.$netice["userID"].'">
                        <input type="file" class="form-control" name="image" value="'.$netice["userImg"].'" required="required">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">User Name</label>
                            <input type="text" class="form-control" name="name"   placeholder="Name..." required="required" value="'.$netice["userName"].'">
                        </div>
                        <div class="form-group mb-4">
                        <label for="formGroupExampleInput">User Surname</label>
                        <input type="text" class="form-control"  name="surname"   placeholder="Surname..." required="required" value="'.$netice["userSurname"].'">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">User Email</label>
                            <input type="email" class="form-control" name="email"   placeholder="Email..." required="required" value="'.$netice["userEmail"].'">
                        </div>
                        <div class="form-group mb-4">
                            <label for="formGroupExampleInput">User Password</label>
                            <input type="password" id="myInput" class="form-control" name="pasword"   placeholder="********" required="required" value="'.$netice["userPassword"].'"><br>
                            <input type="checkbox" onclick="myFunction()" > Show Password
                        </div>';
                        endforeach;
                        ?>
                    <input type="submit" name="postsave" class="btn btn-success" value="💾 Save">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php require_once("components/footer.php"); ?>