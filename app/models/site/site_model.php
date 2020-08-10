<?php

class site_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function getProductonCategory($id)
    {
        return $this->db->listele("product", "LEFT JOIN pictures  ON product.productID=pictures.product_id WHERE CategoryID=".$id);//test olacaq
    }

public function productgetir(){
    return $this->db->listele("product", "LEFT JOIN pictures  ON product.productID=pictures.product_id ORDER BY productCreated DESC");
}
 public function selecktedCategory($id){

     return $this->db->listele("categories", "INNER JOIN product INNER JOIN pictures WHERE categories.c_id=$id ORDER BY product.productCreated DESC");

 }

public function getProductonCategoryLimit($id,$start,$end){
    return $this->db->listele("product", "LEFT JOIN pictures  ON product.productID=pictures.product_id WHERE CategoryID=$id LIMIT $start,$end");
}

}

?>