<?php

class users_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function usersgetir()
    {
        return $this->db->listele("users", "ORDER BY userID DESC");
    }
    public function userLimit($start=null,$end=null)
    {
        return $this->db->listele("users", "ORDER BY userID DESC LIMIT ".$start." , ".$end." ");
    }


    public function adduser($veri)
    {
        return $this->db->ekle("users", "userImg,userName,userSurname,userEmail,userPassword", $veri,"?,?,?,?,?","users/users");
    }

    public function edituser($id)
    {
        return $this->db->listele("users", "WHERE userID=" . $id);
    }
    public function editusersave($veri, $id)
    {
        return $this->db->guncelle("users", $veri, 'userID=' . $id,"userImg=?,userName=?,userSurname=?,userEmail=?,userPassword=?","users/users");
    }

    public function deleteusers($id)
    {
        return $this->db->silme("users", 'userID=' . $id,"users/users");
    }


}
?>