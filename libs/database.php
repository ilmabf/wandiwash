<?php

class Database extends PDO{
    function __construct($DB_TYPE, $DB_HOST, $DB_NAME, $DB_USER, $DB_PASSWORD){
        parent::__construct($DB_TYPE . ':host=' . $DB_HOST . ';dbname=' . $DB_NAME, $DB_USER, $DB_PASSWORD);
    }

    function select($selection, $table, $condition){
        $query = "SELECT * FROM ".$table." ".$condition;
        $stmt = $this->prepare($query);
        $stmt->execute();
    
        if($selection == 'count'){
            $count = $stmt->rowCount();
            return $count;
        }

        else{
            if(gettype($selection) == 'array'){
                $query = "SELECT";
                foreach($selection as $element){
                    if($element = $selection[count($selection)-1]){
                        $query = $query . " " . $element;
                    }
                    else{
                        $query = $query . " " . $element . ",";
                    }
                }
            }
            else if(gettype($selection) == 'string'){
                $query = $query . " " . $selection;
            }
            $query.=" FROM ".$table." ". $condition;
            $stmt = $this->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        }
    }
    
}