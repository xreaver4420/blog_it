<?php
class Validate{
    public static  function  isNumber($str){
        return preg_match('/^[0-9]+$/', $str);
    }

    public static  function  isPhone($str){
        return preg_match('/^[0-9]{9,11}$/', $str);
    }


}