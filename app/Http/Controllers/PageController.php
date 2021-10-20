<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index(){
        return view('pages.index');
    }

    public function sample(){
        return view('pages.sample-page');
    }

    public function table(){
        return view('pages.table-basic');
    }

    public function datatable(){
        return view('pages.table-data');
    }

    public function page404(){
        return view('pages.404-page');
    }

}
