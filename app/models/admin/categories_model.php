<?php

class categories_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }



    public function categorygetir()
    {
        return $this->db->listele("categories", "ORDER BY c_id ASC");
    }


    public function kategorysave($veri)
    {
        return $this->db->ekle("categories", "categoryName,visible", $veri,"?,?","categories/categories");
    }

    public function editcategoryX($id,$controlArray=false)
    {
        return $this->db->listele("categories", "WHERE c_id=" . $id,$controlArray);
    }
    public function editkategorysave($veri, $id)
    {
        return $this->db->guncelle("categories", $veri, 'c_id=' . $id,"categoryName=?,visible=?","categories/categories");
    }

    public function deletegategory($id)
    {
        return $this->db->silme("categories", 'c_id=' . $id,"categories/categories");
    }


}
?>