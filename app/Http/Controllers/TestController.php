<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function Home()
    {
        return view("extra");
    }

    public function Page($p1)
    {
        // default
        // return view("page", ['title' => $p1]);

        // alt
        return view("pagedir.page", compact('p1'));
    }
}
