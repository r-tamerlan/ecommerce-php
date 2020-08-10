<?php session_start();

class favorit extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getFavorits($userId)
    {
        if ($userId != null):
            $kayitlarabak = $this->yukle->model("site/", "site_favorit");
            $veriAdmin = $this->yukle->model("admin/", "categories_model");
            $selektedUserFavorit = $kayitlarabak->getSelektedUserFavorits($userId);

            $categories = $veriAdmin->categorygetir();


            $this->yukle->view("site/view/cart", $categories, $selektedUserFavorit,$selektedUserFavorit);
        else:
            echo '<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      Hesab acin veya daxil olun
    </div>
  </div>';
        endif;
    }

    public function deleteFavorit($productId)
    {
        $kayitlarabak = $this->yukle->model("site/", "site_favorit");
        $kayitlarabak->deleteSelektedFavorit($productId);
        // header('Location: http://localhost/MVC/site/favorit/getFavorits/'.$_SESSION["userId"].'');
    }

    public function addFavorit($value)
    {
        $val = explode("-", $value);
        $productID = $val[0];
        $userID = $val[1];

        $kayitlarabak = $this->yukle->model("site/", "site_favorit");
        $kayitlarabak->addtoFavorits(array($userID,$productID));
    }


}

?>