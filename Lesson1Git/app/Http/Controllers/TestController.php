<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function Test() {
        $title = "Đây là tiêu đề n";
        return view('test')->with('title', $title);
    }
}
