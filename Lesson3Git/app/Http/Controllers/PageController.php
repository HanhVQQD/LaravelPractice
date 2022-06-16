<?php			
			
namespace App\Http\Controllers;			
			
use Illuminate\Http\Request;			
			
class PageController extends Controller			
{			
    public function getIndex(){			
    	return view('pages.homepage');		
    }	
    
    public function getProduct_type(){			
    	return view('pages.product_type');		
    }

    public function getDetail_product(){			
    	return view('pages.product_detail');		
    }
}			
			