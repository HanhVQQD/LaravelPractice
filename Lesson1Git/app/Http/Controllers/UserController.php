<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers;

class UserController extends Controller
{
    public function getIndex() {
        echo "Hello PNV students";
    }
}