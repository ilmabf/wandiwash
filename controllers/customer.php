<?php

class Customer extends Controller{

    function __construct(){
        parent::__construct();
    }

    function signup(){
        $this->view->render('customerSignup');
    }

    
}