<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
class VegiesController extends Controller
{
    public function index(){
      $msg = "This is a simple message.";
      
      
      
      $conn = DB::table('food_category_tb')->get();
      
      return response()->json(array('msg'=> $msg, 'db'=> $conn), 200);
   }
}
