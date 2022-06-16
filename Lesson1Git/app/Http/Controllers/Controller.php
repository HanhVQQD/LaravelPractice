<?php
// Khai baos dduowngf daanx, noiw taoj controller
namespace App\Http\Controllers;

// Khai báo thư viện chúng ta sẽ dùng.
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

// Tạo contraller
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}