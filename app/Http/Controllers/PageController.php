<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function sample(){
        return view('pages.SamplePages.sample-page');
    }

    public function table(){
        return view('pages.SamplePages.table-basic');
    }

    public function datatable(){
        return view('pages.SamplePages.table-data');
    }

    public function page404(){
        return view('pages.Errors.404');
    }

}
