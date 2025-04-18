<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller

{

    public function sendResponse($result, $message)
    {
        $response = [
            'success'   => $result,
            //'data'      => $result,
            //'message'   => $message
        ];

        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success'   => false,
            'message'   => $error
        ];
        if(!empty($errorMessages)){
            $response['data'] = $errorMessages;
        }

        return response()->json($errorMessages, $code);
    }

}
