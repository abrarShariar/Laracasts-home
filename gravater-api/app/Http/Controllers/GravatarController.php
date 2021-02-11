<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Validator;

class GravatarController extends Controller
{
    // generate the gravatar url from email
    /**
     * @param Request $request
     * @param string $email
     * @return string $url
     */
    public function getUrl(Request $request, string $email)
    {
        try {
            Validator::make(['email' => $email], [
                'email' => 'required|email'
            ])->validate();
            
            $hash =  md5(strtolower(trim($email)));
            $garvatr_url = "https://www.gravatar.com/avatar/$hash".".jpeg";
            return response()->json([
                'gravatr_url' => $garvatr_url
            ]);

        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ], 500);
        }
    }
    
}
