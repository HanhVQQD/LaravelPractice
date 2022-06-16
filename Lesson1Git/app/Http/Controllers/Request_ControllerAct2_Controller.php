<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Request_ControllerAct2_Controller extends Controller
{
    public function index() {
        return view('activity2');
    }

    public function displayInfor (Request_ControllerAct2_Request $Request) {
        $product = [
            'danhmuc' => $danhmuc = $Request -> input("danhmuc"),
            'spnb' => $spnb = $Request -> input("spnb"),
            'ten' => $ten = $Request -> input("ten"),
            'gia' => $gia = $Request -> input("gia"),
            'giacu' => $giacu = $Request -> input("giacu"),
            'anh' => $anh = $Request -> input("anh"),
        ];
        return view ('activity2') -> with ('product', $product);
    }
}
