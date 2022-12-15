<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function response($result ="", $message= "Action Performed Successfully", $status=200 ) 
    {
        $response = [
            'status'=> $status,
            'message' => $message,
            'data' => $result
        ];

        return response()->json($response, $status);
    }
}
