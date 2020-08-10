<?php

class product extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function product($page = null)
    {
        @$sayfa=$_POST["page"];
        $kayitlarabak = $this->yukle->model("admin/","product_model");
        $allveri = $kayitlarabak->productgetir();

        // Sayfalama Start
        $toplamdata = count($allveri);
        $gosterilecekdata=15;
        $GLOBALS["cemiseife"] = ceil($toplamdata / $gosterilecekdata);

        $sayfa = isset($page) ? (int)$page : 1;
        if ($sayfa < 1) $sayfa = 1;
        if ($sayfa > $GLOBALS["cemiseife"]) $sayfa = $GLOBALS["cemiseife"];
        $limit = ($sayfa - 1) * $gosterilecekdata;
        // Sayfalama End
        $veri = $kayitlarabak->productLimit($limit, $gosterilecekdata);
        $this->yukle->view("admin/view/product/product", $veri, $sayfa);
    }

    public function createproduct()
    {
        $kayitlarabak = $this->yukle->model("admin/","categories_model");
        $veri = $kayitlarabak->categorygetir();
        $this->yukle->view("admin/view/product/createproduct", $veri, null);
    }

    public function savecreateproduct()
    {
        $form = $this->yukle->form("Form");
        $kayitlarabak = $this->yukle->model("admin/","product_model");

        $category = $form->get("p_kategoriya")->bosmu();
        $name = $form->get("name")->bosmu();
        $stock = $form->get("stock")->bosmu();
        $info = $form->get("info")->bosmu();
        $price = $form->get("price")->bosmu();

        // Img
        $total = count($_FILES['upload']['name']);
        for ($i = 0; $i < $total; $i++) {
            $tmpFilePath = $_FILES['upload']['name'][$i];
            $dosyax = $_FILES['upload']['tmp_name'][$i];
            $uzanti = explode('.', $tmpFilePath);
            $uzanti = $uzanti[count($uzanti) - 1]; // .jpg

            $olustur = md5($tmpFilePath);
            $tarih = date("d.m.Y");
            $filename = $olustur . "_" . $tarih . "." . $uzanti;
            move_uploaded_file($dosyax, 'app/view/admin/assets/LocalStorage/' . $filename);
            $filesname[] = $filename;
        }
        $willSaveImagesName = implode("-", $filesname);
        //Img
        error_log(json_encode($_FILES['upload']['tmp_name']));

        $idX=$kayitlarabak->lastProductIdGetir();
        if ($idX["productID"]==null):
            $proId=1;
        else:
            $proId=($idX["productID"]+1);
        endif;

        if (!empty($form->error)) :
            $hata = $form->error;
            $this->yukle->view("admin/view/product/product", $hata);
        else:

            $kayitlarabak->saveproduct(array($category, $name, $stock, $info, $price));
            $kayitlarabak->imageSave(array($proId, $willSaveImagesName));
        endif;


    }


    public function editingproduct($id)
    {

        $kayitlarabak1 = $this->yukle->model("admin/","product_model");
        $kayitlarabak2 = $this->yukle->model("admin/","categories_model");
        $veri = $kayitlarabak1->editproduct($id);
        $veri2 = $kayitlarabak2->categorygetir();
        $this->yukle->view("admin/view/product/editproduct", $veri, $veri2);
    }

    public function saveeditproduct()
    {

        $form = $this->yukle->form("Form");
        $kayitlarabak = $this->yukle->model("admin/","product_model");

        $category = $form->get("p_kategoriya")->bosmu();
        $name = $form->get("name")->bosmu();
        $stock = $form->get("stock")->bosmu();
        $info = $form->get("info")->bosmu();
        $price = $form->get("price")->bosmu();

        $pcId=$_POST["pictures_picturesID"];
        $id = $_POST["proid"];

        // Img
        $total = count($_FILES['upload']['name']);

        for ($i = 0; $i < $total; $i++) {
            $tmpFilePath = $_FILES['upload']['name'][$i];
            $dosyaX = $_FILES['upload']['tmp_name'][$i];
            $uzanti = explode('.', $tmpFilePath);
            $uzanti = $uzanti[count($uzanti) - 1]; // .jpg

            $olustur = md5($tmpFilePath);
            $tarih = date("d.m.Y");
            $filename = $olustur . "_" . $tarih . "." . $uzanti;

            move_uploaded_file($dosyaX, 'app/view/admin/assets/LocalStorage/' . $filename);

            $filesname[] = $filename;
        }
        $willSaveImagesName = implode("-", $filesname);
        error_log(json_encode($willSaveImagesName));
        error_log(json_encode($_FILES['upload']['tmp_name']));

        //Img

        if (!empty($form->error)) :
            $hata = $form->error;
            $this->yukle->view("admin/view/product/product", $hata);
        else:

            $kayitlarabak->editproductsave(array($category, $name, $stock, $info, $price), $id);
            $kayitlarabak->editImageSave(array($willSaveImagesName),$pcId);
        endif;


    }


    public function deleteproduct($id)
    {
        $kayitlarabak = $this->yukle->model("admin/","product_model");
        $kayitlarabak->deleteproducts($id);
    }



}

?>