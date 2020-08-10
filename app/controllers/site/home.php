<?php session_start();

class home extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function homepage()

    {
        $veri=$this->yukle->model("admin/","categories_model");
        $categories=$veri->categorygetir();
        $kayitlarabak = $this->yukle->model("site/", "site_model");
        $allproducts=$kayitlarabak->productgetir();
        $kayitlarabakXS = $this->yukle->model("site/", "site_favorit");
        $selektedUserFavorit = $kayitlarabakXS->getSelektedUserFavorits($_COOKIE["userId"]);

        $this->yukle->view("site/view/homepage",$categories,$selektedUserFavorit,$allproducts);
    }

    public function backhomepage()

    {
        session_destroy();

        $veri=$this->yukle->model("admin/","categories_model");
        $categories=$veri->categorygetir();
        $kayitlarabak = $this->yukle->model("site/", "site_model");
        $allproducts=$kayitlarabak->productgetir();
        $this->yukle->view("site/view/homepage",$categories,null,$allproducts);
    }


}

?>