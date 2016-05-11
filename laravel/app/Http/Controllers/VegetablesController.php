<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;
use DB;
use Session;
class VegetablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $food_category = DB::select( DB::raw("SHOW COLUMNS FROM food_category_tb WHERE Field = 'category'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $food_category, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        
        $foods = DB::select('select * from food_category_tb where status_flag = 1');
        $foods = $foods[0];
        //print_r($foods[0]);
        $data = [
            "item_name" => $foods->name,
            "item_desc" => $foods->description,
            "item_price" => $foods->price,
            "category" => $enum
        ];
        
        return View::make('items.vegetables-item', compact('data'));
        //return response()->json(array('enum'=> $enum), 200);
        // try {
            // $food_category = DB::select('select * from food_category_tb where status_flag = 1');
            // $data = array();
            // foreach($food_category as $food)
            // {
                // $data = {
                    // 'category'
                // };
            // };
        // }
        // catch (PDOException $exception) {
            // Log:error( $exception->getMessage() );
        // }
        // return response()->json(array('db'=> $conn), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "dito ba yan? RESTful create?!";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
