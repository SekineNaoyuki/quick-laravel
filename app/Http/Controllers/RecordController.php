<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class RecordController extends Controller
{
    public function run()
    {
        return Book::find(1)->title;
    }

    public function where()
    {
        $result = Book::where('publisher', '走跳社')->get();
        return view('hello.list', ['records' => $result]);
    }

}
