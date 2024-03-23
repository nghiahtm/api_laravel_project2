<?php

namespace App\Http\Controllers;


use Illuminate\Http\Response;

abstract class Controller
{
    public function  sentSuccessResponse($data = "", $message = "success", $status = 200)
    {
        return \response()->json([
            'data'=>$data,
                "message"=>$message,
                "status code"=>$status
            ]
        );
    }
}