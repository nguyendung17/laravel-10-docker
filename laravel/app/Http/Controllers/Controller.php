<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function view($view, $data = [])
    {
        $defaultData["meta"] = config("meta");
        $defaultData["userInfo"] = auth()->user();
        $data = array_merge($defaultData,$data);
        return view($view, $data);
    }
}
