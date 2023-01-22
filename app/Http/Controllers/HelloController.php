<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

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
            'records' => Book::all()
        ];

        return view('hello.list', $data);
    }
}
