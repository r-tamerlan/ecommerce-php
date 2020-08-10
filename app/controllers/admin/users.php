<?php

class users extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function users($page=null)
    {
        $kayitlarabak = $this->yukle->model("admin/","users_model");
        $allveri = $kayitlarabak->usersgetir();

        // Sayfalama Start
        $toplamdata = count($allveri);
        $gosterilecekdata = 15;
        $GLOBALS["usersCemiseife"] = ceil($toplamdata / $gosterilecekdata);

        $sayfa = isset($page) ? (int)$page : 1;
        if ($sayfa < 1) $sayfa = 1;
        if ($sayfa > $GLOBALS["usersCemiseife"]) $sayfa = $GLOBALS["usersCemiseife"];
        $limit = ($sayfa - 1) * $gosterilecekdata;
        // Sayfalama End

        $veri = $kayitlarabak->userLimit($limit, $gosterilecekdata);
        $this->yukle->view("admin/view/users/users", $veri, $sayfa);
    }

    public function createuser()
    {
        $this->yukle->view("admin/view/users/createUser");
    }

    public function savecreateuser()
    {
        $form = $this->yukle->form("Form");

        $imange = $_FILES["image"]["name"];
        $name = $form->get("name")->bosmu();
        $surname = $form->get("surname")->bosmu();
        $email = $form->get("email")->bosmu();
        $pasword = $form->get("pasword")->bosmu();

        if (!empty($form->error)) :
            $hata = $form->error;
            $this->yukle->view("admin/view/users/users", $hata);
        else:
            $kayitlarabak = $this->yukle->model("admin/","users_model");
            $kayitlarabak->adduser(array($imange, $name, $surname, $email, $pasword));
        endif;


    }


    public function editinguser($id)
    {

        $kayitlarabak = $this->yukle->model("admin/","users_model");
        $veri = $kayitlarabak->edituser($id);
        $this->yukle->view("admin/view/users/editUser", $veri);
    }

    public function saveedituser()
    {

        $form = $this->yukle->form("Form");

        $imange = $_FILES["image"]["name"];
        $name = $form->get("name")->bosmu();
        $surname = $form->get("surname")->bosmu();
        $email = $form->get("email")->bosmu();
        $pasword = $form->get("pasword")->bosmu();

        $id = $_POST["id"];

        if (!empty($form->error)) :
            $hata = $form->error;
            $this->yukle->view("admin/view/users/users", $hata);
        else:
            $kayitlarabak = $this->yukle->model("admin/","users_model");
            $kayitlarabak->editusersave(array($imange, $name, $surname, $email, $pasword), $id);
        endif;


    }


    public function deleteuser($id)
    {
        $kayitlarabak = $this->yukle->model("admin/","users_model");
        $kayitlarabak->deleteusers($id);
    }

}
?>