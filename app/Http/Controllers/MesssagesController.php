<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MesssagesController extends Controller
{

    public function write()
    {
        return view('messages.write');
    }

    public function save(Request $request)
    {
        return $request->all();
    }

}
