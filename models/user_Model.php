<?php


class User_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    public function authenticate($uname, $pwd){
        if($this->db->select('count', "users", "WHERE( Username = '$uname') AND PASSWORD = '$pwd';") > 0){ 
            return true; 
        }
        else{
            return false;
        }
    }

    public function checkCustomer($uname){
        if($this->db->select('count', "customer", "INNER JOIN users ON customer.User_ID = users.User_ID WHERE Username = '$uname';") > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function checkManager($uname){
        if($this->db->select('count', "users", "WHERE Username = '$uname' AND User_ID = '2';") > 0){
            return true;
        }
        else{
            return false;
        }
    }

    public function checkSTL($uname){
        if($this->db->select('count', "users", "WHERE Username = '$uname' AND STL_ID IS NOT NULL;") > 0){
            return true;
        }
        else{
            return false;
        }
    }

    // public function checkSystemAdmin($uname){
    //     if($this->db->select('count', "users", "WHERE Username = '$uname' AND User_ID = '1';") > 0){
    //         return true;
    //     }
    //     else{
    //         return false;
    //     }
    // }
}