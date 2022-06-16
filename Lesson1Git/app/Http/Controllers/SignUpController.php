<?php

namespace App\Http\Controllers;
use App\Http\Request;
use Input, File;
//use Request;
use App\Http\Requests\SignUpRequest;

//use Illuminate\Http\Request;

class SignUpController extends Controller
{
    public function index() {
        return view('signup');
    }

    public function displayInfor (SignUpRequest $Request) {
        $user = [
            'name' => $name = $Request -> input("name"),
            'age' => $age = $Request -> input("age"),
            'date' => $date = $Request -> input("date"),
            'phone' => $phone = $Request -> input("phone"),
            'web' => $web = $Request -> input("web"),
            'address' => $address = $Request -> input("address"),
        ];
        return view ('signup') -> with ('user', $user);
    }
}
