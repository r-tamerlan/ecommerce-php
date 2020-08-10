<?php

class site_favorit extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getSelektedUserFavorits($id)
    {
        return $this->db->listele("favorit","INNER JOIN product ON favorit.product_id = product.productID INNER JOIN users ON favorit.user_id=users.userID LEFT JOIN pictures ON product.productID=pictures.product_id WHERE favorit.user_id=$id");
    }

    public  function deleteSelektedFavorit($productId)
    {
        return $this->db->silme("favorit","product_id=$productId",null,true);
    }

    public function addtoFavorits($values)
    {
        return $this->db->ekle("favorit","user_id,product_id",$values,"?,?");
    }













}

?>