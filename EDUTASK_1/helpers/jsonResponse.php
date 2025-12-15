<?php
    function jsonResponse($array){
        header("HTTP/1.1");
        header("Content-Type: application/json");
        echo json_encode($array);
        exit;
    }
?>