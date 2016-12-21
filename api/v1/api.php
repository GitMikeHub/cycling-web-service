<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'MichaelsAPI.php';
// Requests from the same server don't have a HTTP_ORIGIN header
if (!array_key_exists('HTTP_ORIGIN', $_SERVER)) {
    $_SERVER['HTTP_ORIGIN'] = $_SERVER['SERVER_NAME'];
}

try {
    $API = new MichaelsAPI($_REQUEST['request'], $_SERVER['HTTP_ORIGIN']);    
    echo $API->processAPI();
} 
catch (Exception $e) {
    echo json_encode(Array('error' => $e->getMessage()));
}