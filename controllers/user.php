<?php

class User extends Controller{

    function __construct(){
        parent::__construct();
    }

    function login(){
        $this->view->render('userLogin');
    }

    function reviews(){
        $this->view->render('userReviews');
    }

    function passwordReset(){
        $this->view->render('userForgotPwd');
    }

    function home(){
        $uname = $_POST['usernameemail'];
        $pwd = $_POST['pwd'];
        
        if($this->model->authenticate($uname, $pwd)){
            session_start();
            $_SESSION["time"] = date("h:i:sa");
            $_SESSION["login"] = "loggedin";
            if($this->model->checkCustomer($uname)){
                $_SESSION["role"] = "customer";
                $this->view->render('customerHome');
            }
            else if($this->model->checkManager($uname)){
                $_SESSION["role"] = "manager";
                $this->view->render('managerHome');
            }
            else if($this->model->checkSTL($uname)){
                $_SESSION["role"] = "stl";
                $this->view->render('stlHome');
            }
            else{
                $_SESSION["role"] = "systemadmin";
                $this->view->render('systemAdminHome');
            }
        }
        else{
            //send login error to the view
        }
    }
}