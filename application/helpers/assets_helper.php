<?php 	if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function url_css($nom){
	return '<link rel="stylesheet" href="'. url().'assets/css/'.$nom.'.css">';
}



function url_js($nom){
	return '<script  src="'.base_url().'assets/js/'.$nom.'.js"></script>';
}

function url_img($nom, $alt="", $class=""){
	return '<img src="'.base_url().'assets/images/'.$nom.'" alt="'.$alt.'"class='.$class.'>';
}

function url(){
 // output: /myproject/index.php
    $currentPath = $_SERVER['PHP_SELF']; 
    
    // output: Array ( [dirname] => /myproject [basename] => index.php [extension] => php [filename] => index ) 
    $pathInfo = pathinfo($currentPath); 
    
    // output: localhost
    $hostName = $_SERVER['HTTP_HOST']; 
    
    // output: http://
    $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
    
    // return: http://localhost/myproject/
    return $protocol.$hostName.$pathInfo['dirname']."";
}


