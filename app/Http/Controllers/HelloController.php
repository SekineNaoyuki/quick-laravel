<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\DB;

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
    public function list()
    {
        $data = [
            'records' => DB::select('SELECT * FROM books')
        ];

        return view('hello.list', $data);
    }
}
