<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome($firstname = null, $lastname = null)
    {

        return "<h1>Welcome to " . $firstname . " " . $lastname . " homepage<h1>" . "<h3>This is the first time to run Laravel Framework";
    }

    public function  lab6Controller($firstname = null, $lastname = null)
    {

        return view('index')
            ->with('firstname', $firstname)
            ->with('lastname', $lastname);
    }
}

// class lab6Controller extends BaseController
// {
//     use AuthorizesRequests, DispatchesJobs , ValidatesRequests;

//     public function welcome($firstname = null, $lastname = null){
//         return view('index')
//         ->with('firstname', $firstname)
//         ->with('lastname', $lastname);
//     }
// }