<?php
namespace Netonevess\HttpStatusCodesPhp;

enum HTTPStatusCode:string{

    case NotFound = '404';
    case ok = '200';

    public static function status2code(){

    }
}
