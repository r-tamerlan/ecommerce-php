<?php

class site_login extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUsers($email)
    {
        return $this->db->listele("users","WHERE userEmail='$email'","ok");
    }

    public function saveUser($veriler)
    {
        return $this->db->ekle("users","userName,userEmail,userPassword",$veriler,"?,?,?","home/homepage",WEBSITE_URL);
    }

    public  function getThisUser($emailUser)
    {
        return $this->db->listele("users","WHERE userEmail='$emailUser'","ok");
    }

    public  function chekEmail($emailUser)
    {
        return $this->db->listele("users","WHERE userEmail='$emailUser'");
    }
}

?>