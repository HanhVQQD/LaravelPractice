<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumController extends Controller
{
    public function Sum()
    {
        return view('sum');
    }
    public function ResultSum(Request $a)
    {
        $SUM = $a->a + $a->b;
        return view('sum',compact('SUM'));
    }
}
