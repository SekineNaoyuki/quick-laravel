<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function param(int $id = 1)
    {
        return 'id 値：' . $id;
    }
}
