<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function getAdmin(){
        return view('pages.admin');
    }

    public function getSidebar(){
        return view('sidebar');
    }

}