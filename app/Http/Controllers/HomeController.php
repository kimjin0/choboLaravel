<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $items = [
            '1과',
            '2과',
            '3과 짱'
        ];
        return view('welcome')->withItems($items);
    }

    public function data(){
        $items = [
            'js',
            'vuejs',
            '<script>alert("test");</script>',
        ];
        return view('data', [
            'items' => $items
        ]);
    }
    public function notice(){
        $items = [
            'codeigniter',
            'laravel',
            'java'
        ];
        return view('notice')->with([
            'items' => $items
        ]);
    }
}
