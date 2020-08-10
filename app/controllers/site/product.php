<?php session_start();


class product extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getcategories($id)
    {
        $kayitlarabak = $this->yukle->model("site/", "site_model");
        $veriAdmin=$this->yukle->model("admin/","categories_model");
        $allproducts=$kayitlarabak->productgetir();
        $veriPro = $kayitlarabak->getProductonCategory($id);

//Pagination START
        $toplamdata = count($veriPro);
        $gosterilecekdata=10;
        $GLOBALS["Cemseyfe"] = ceil($toplamdata / $gosterilecekdata);

        $sayfa = isset($page) ? (int) $page : 1;
        if ($sayfa < 1) $sayfa = 1;
        if ($sayfa > $GLOBALS["Cemseyfe"]) $sayfa = $GLOBALS["Cemseyfe"];
        $limit = ($sayfa - 1) * $gosterilecekdata;
//Pagination END

        $veri=$kayitlarabak->getProductonCategoryLimit($id,$limit,$gosterilecekdata);
        $categories=$veriAdmin->categorygetir();
        $thisCategoies=$veriAdmin->editcategoryX($id,"ok");

        $kayitlarabakXS = $this->yukle->model("site/", "site_favorit");
        $selektedUserFavorit = $kayitlarabakXS->getSelektedUserFavorits($_COOKIE["userId"]);

        $this->yukle->view("site/view/category",$categories,$selektedUserFavorit, $veri,$thisCategoies,$allproducts,$sayfa);

    }

    public function showProduct($id){
        $kayitlarabak=$this->yukle->model("admin/","product_model");
        $selektedproduct=$kayitlarabak->editproduct($id,"ok");
        $veri=$this->yukle->model("admin/","categories_model");
        $categories=$veri->categorygetir();
        $selecktedC=$this->yukle->model("site/", "site_model");

        $kayitlarabakXS = $this->yukle->model("site/", "site_favorit");
        $selektedUserFavorit = $kayitlarabakXS->getSelektedUserFavorits($_COOKIE["userId"]);

        $xxs=$selecktedC->selecktedCategory($selektedproduct["CategoryID"]);
        $this->yukle->view("site/view/product",$categories,$selektedUserFavorit,$selektedproduct,$xxs);
    }



}

?>