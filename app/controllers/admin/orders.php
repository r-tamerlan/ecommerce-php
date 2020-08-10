<?php

class orders extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function orders()
    {
        $kayitlarabak = $this->yukle->model("admin/","orders_model");
        $veri = $kayitlarabak->ordersgetir();
        $this->yukle->view("admin/view/orders/orders", $veri);
    }

    public function deleteorders($id)
    {
        $kayitlarabak = $this->yukle->model("admin/","orders_model");
        $kayitlarabak->deleteorder($id);
    }


}
?>