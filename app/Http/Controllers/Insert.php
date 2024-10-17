<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Insert extends Controller
{
   public static function insert(Request $request){

        $firstname = $request['firstname'];
        $lastname = $request['lastname'];
        $age = $request['age'];
        $address = $request['address'];

        $inserted = DB::table("users")->
        insert([
            "firstname" => $firstname,
            "lastname" => $lastname,
            "age" => $age,
            "address" => $address
        ]); 

        if($inserted){
            return [
                "success" => true,
                "message" => "Successfull"
            ];
        }else{
            return [
                "success" => false,
                "message" => "Failed registration"
            ];
        }
        
        return $request;
   }
}
