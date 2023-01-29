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
        $result = Book::groupBy('publisher')
            ->having('price_avg', '>', 1000)
            ->selectRaw('publisher, AVG(price) AS price_avg')->dump()->get();
        // return view('hello.list', ['records' => $result]);
    }

    public function hasmany()
    {
        return view('record.hasmany', ['book' => Book::find(1) ]);
    }
}
