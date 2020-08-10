<?php

class orders_model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function ordersgetir()
    {
        return $this->db->listele("orders", "  LEFT JOIN users  ON orders.user_id=users.userID LEFT JOIN product  ON orders.product_id=product.productID");
    }

    public function deleteorder($id)
    {
        return $this->db->silme("orders", 'id=' . $id,"orders/orders");
    }
}
?>