<?php

class product_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function lastProductIdGetir()
    {
        return $this->db->listele("product", "ORDER BY productCreated DESC","ok");
    }
    public function productgetir()
    {
        return $this->db->listele("product", "LEFT JOIN categories  ON product.CategoryID=categories.c_id");
    }

    public function productgetirForDate($kosul1) //test...
    {
        return $this->db->listele("product", $kosul1);
    }

    public function productLimit($start=null,$end=null)
    {
        return $this->db->listele("product", "LEFT JOIN categories  ON product.CategoryID=categories.c_id LIMIT ".$start.",".$end." ");
    }


    public function saveproduct($veri)
    {
        return $this->db->ekle("product", "CategoryID,productName,productStock,productInfo,productPrice", $veri,"?,?,?,?,?");
    }

    public function editproduct($id,$arraycontrol=false)
    {
        return $this->db->listele("product", "LEFT JOIN pictures ON product.productID=pictures.product_id LEFT JOIN categories ON product.CategoryID=categories.c_id WHERE productID=" . $id,$arraycontrol);
    }
    public function editproductsave($veri, $id)
    {
        return $this->db->guncelle("product", $veri, 'productID=' . $id,"CategoryID=?,productName=?,productStock=?,productInfo=?,productPrice=?");
    }

    public function deleteproducts($id)
    {
        return $this->db->silme("product", 'productID=' . $id,"product/product");
    }

    //----------------------------------- Photos -------------------------------------

    public function imageSave($veri)
    {
        return $this->db->ekle("pictures", "product_id,images", $veri,"?,?","product/product");
    }

    public function editImageSave($veri, $id)
    {
        return $this->db->guncelle("pictures", $veri, "id=" . $id,"images=?","product/product");
    }

}
?>