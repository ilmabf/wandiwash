<?php


function select($selection, $table, $condition){
    $query = "SELECT * FROM ".$table." ".$condition;
    $stmt = $this->prepare($query);
    $stmt->execute();

    $count = $stmt->rowCount();
    return $count;
}
