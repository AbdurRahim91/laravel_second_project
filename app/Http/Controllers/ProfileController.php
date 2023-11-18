<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class ProfileController extends Controller
{
    public function index($id)
    {
        // Declare the variables and assign the values stated in Question
        $name = "Abdur Rahim";
        $age = "33";

        // Add three variables in $data variable as an associative array with values stated in the question
        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age,
        ];

        // Set your cookie variables stated in the question
        $cookieName = 'access_token';
        $cookieValue = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Add the return statement with the response method along with $data and status-code
        $response = new Response($data, 200);
        $response->cookie($cookieName, $cookieValue, $minutes, $path, $domain, $secure, $httpOnly);
        return $response;     
    }
}

