<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $i=10;
        $count = 0;
        $limit = 10000;
        while (true){
            if($i==$limit+1){
                // TODO-vardump VAR_DUMP
                var_dump('<br><br><br>COUNT= '.$count);
                // TODO-vardump VAR_DUMP
                die(var_dump('<br><br><br><br>'.$limit));
            }
            for($d=2; $d<=9; $d++){
                $div = $i%$d;
                if($div != 0 && $i<$limit){
                    $i++;
                    continue 2;
                }
            }

            if($i!=$limit || ($i==$limit && $div==0)){
                $count++;
                // TODO-vardump VAR_DUMP
                var_dump('<br>'.$i);
            }

            $i++;
        }
    }
}
