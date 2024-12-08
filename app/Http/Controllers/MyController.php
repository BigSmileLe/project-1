<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function showData()
    {
        $data = ['name' => 'John Doe', 'age' => 30];

        return view('myview', compact('data'));
    }
    public function processForm(Request $request)
{
    $name = $request->input('name');
    return view('myview', compact('name'));
}

}

