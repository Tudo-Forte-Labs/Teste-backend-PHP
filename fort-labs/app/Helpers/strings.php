<?php

function clearSpecialCharacters($value){
    $str = str_replace('-', '', $value);
    return preg_replace('/[^A-Za-z0-9\-]/', '', $str);
}

function clearMonetaryValue($value) {
    $str = str_replace('R$ ', '', $value);
    $str = str_replace('.', '', $str);
    $str = str_replace(',', '.', $str);
    return $str;
}

function monetary($value) {
    return number_format($value,2,',','.');

}
