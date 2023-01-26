<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CtrlController extends Controller
{
    public function plain()
    {
        return response('こんにちは、世界！', 200)
            ->header('Content-Type', 'text/plain');
    }

    public function header()
    {
        return response()
            ->view('ctrl.header', ['msg' => 'helllo'], 200)
            ->withHeaders([
                'Content-Type' => 'text/xml',
                'X-Powered-FW' => 'Laravel/9'
            ]);
    }

    public function outJson()
    {
        return response()
        ->json([
            'name' => 'Yoshihiro,YAMADA',
            'sex' => 'male',
            'age' => 18,
        ])
        ->withCallback('callback');
    }

}
