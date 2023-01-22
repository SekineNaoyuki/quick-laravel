<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        return 'konnitiha';
    }

    public function view()
    {
        $data = [
            'msg' => 'test'
        ];

        return view('hello.view', $data);
    }
}
