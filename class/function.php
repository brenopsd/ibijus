<?php

function formatarDataDB($data){
    $data = explode('/',$data);
    return $data[2].'-'.$data[1].'-'.$data[0];
}

function formatarData($data){
    return date('d/m/Y', strtotime($data));
}

function formatarCep($cep){
    return str_replace("-","",$cep);
}

function validateDate($date)
{
    $format = 'd/m/Y';
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}