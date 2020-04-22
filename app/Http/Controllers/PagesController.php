<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $variable = 'Test string';
        //return view('pages.index', compact('variable'));
        return view('pages.index')->with('variable_test', $variable);
    }

    public function main(){
        return view('pages.main');
    }

    public function services(){
        $data = array(
            'title' => 'Services page',
            'services' => ['First', 'Second', 'Third']
        );
        return view('pages.services')->with($data);
    }
}
