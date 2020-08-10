<?php

class logining extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login()
    {
        $this->yukle->view("admin/loginindex");
    }
}

?>