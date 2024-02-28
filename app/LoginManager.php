<?php

namespace App;

use Exception;

class LoginManager
{
    public static function ShowAllData()
    {
        $da = cinemahall::all();

        if(!$da){
            throw new Exception('Data Not Found');
        }
        $response['status']="ok";

        foreach ($da as $x){
            echo $x;
        }
    }
}
