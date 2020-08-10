<?php session_start();

class login extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getLogin()
    {
        $form = $this->yukle->form("Form");

        $email = $form->get("email")->bosmu();
        $password = $form->get("password")->bosmu();

        $kayitlarabak = $this->yukle->model("site/", "site_login");
        $user = $kayitlarabak->getAllUsers($email);



        if (!$user):
            echo 'istifacedi yoxdu';
            //$this->bilgi->hata("HATA OLUŞTU", SITE_URL . $willshowpage);
        else:
            if ($user["userPassword"] != $password):
                echo 'parol sehvdi';
            //$this->bilgi->hata("HATA OLUŞTU", SITE_URL . $willshowpage);
            else:
                $_SESSION["name"] = $user["userName"];
                setcookie("userId", $user["userID"], time() + (86400 * 30), "/"); // 86400 = 1 day

                echo '✅ Giris Basarili <span style="color: #008a00">'.$user["userName"].'</spann>';
                header("Location: http://localhost/MVC/site/home/homepage");
                //$this->bilgi->basarili("Uğurlu Giriş", SITE_URL . $willshowpage);
            endif;
        endif;



    }

    public function getRegistr()

    {
        $form = $this->yukle->form("Form");
        $kayitlarabak = $this->yukle->model("site/", "site_login");

        $email = $form->get("signUpEmail")->bosmu();
        $name = $form->get("signUpName")->bosmu();
        $password = $form->get("signUpPassword")->bosmu();

        $chek=$kayitlarabak->chekEmail($email);
        if ($chek!=null):
            echo "istifadeci/e-mail movcuddur";
        else:

        $_SESSION["name"] = $name;

        $kayitlarabak->saveUser(array($name,$email,$password));
        $userKey=$kayitlarabak->getThisUser($email);


       setcookie("userId", $userKey["userID"], time() + (86400 * 30), "/"); // 86400 = 1 day


endif;
    }

}

?>