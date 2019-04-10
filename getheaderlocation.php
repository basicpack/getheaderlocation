<?php
//Criado por Anderson Ismael
//05 de outrubro de 2018

function getHeaderLocation($url){
    if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
        $header=get_headers($url,true);
    }
    if(isset($headers['Location'])){
        return $header['Location'];
    }else{
        return $url;
    }
}
