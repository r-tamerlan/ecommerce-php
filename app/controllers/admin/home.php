<?php

class home extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function homepage()
    {
        $this->yukle->view("admin/homepage");
    }

}

?>