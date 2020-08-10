<?php

class categories extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function categories()
    {
        $kayitlarabak = $this->yukle->model("admin/","categories_model");
        $veri = $kayitlarabak->categorygetir();
        $this->yukle->view("admin/view/categories/categories", $veri);
    }

    public function addcategory()
    {
        $this->yukle->view("admin/view/categories/createcategory");
    }
    public function saveaddcategory()
    {
        $form = $this->yukle->form("Form");
        $categoryname = $form->get("name")->bosmu();
        $categoryvisible = $_POST["visible"];
        if ($categoryvisible == "ok"):
            $categoryvisible2 = 1;
        else:
            $categoryvisible2 = 0;
        endif;
        if (!empty($form->error)) :
            $hata = $form->error;
            $this->yukle->view("admin/view/categories/categories", $hata);
        else:

            $kayitlarabak = $this->yukle->model("admin/","categories_model");
            $kayitlarabak->kategorysave(array($categoryname, $categoryvisible2));
        endif;

    }


    public function editingcategory($id)
    {

        $kayitlarabak = $this->yukle->model("admin/","categories_model");
        $veri = $kayitlarabak->editcategoryX($id);
        $this->yukle->view("admin/view/categories/editcategory", $veri);
    }
    public function saveeditcategory()
    {

        $form = $this->yukle->form("Form");
        $categoryname = $form->get("name")->bosmu();
        $categoryvisible = $_POST["visible"];
        $id = $_POST["id"];
        if ($categoryvisible == "ok"):
            $categoryvisible2 = 1;
        else:
            $categoryvisible2 = 0;
        endif;
        if (!empty($form->error)) :
            $hata = $form->error;
            $this->yukle->view("admin/view/categories/categories", $hata);
        else:

            $kayitlarabak = $this->yukle->model("admin/","categories_model");
            $kayitlarabak->editkategorysave(array($categoryname, $categoryvisible2), $id);
        endif;


    }


    public function deletecetegory($id)
    {
        $kayitlarabak = $this->yukle->model("admin/","categories_model");
        $kayitlarabak->deletegategory($id);
    }

}

?>