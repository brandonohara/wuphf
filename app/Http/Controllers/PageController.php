<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index($featured = true)
    {
        return view('wuphfs.index', compact('featured'));
    }

    public function all()
    {
        return $this->index(false);
    }
}
