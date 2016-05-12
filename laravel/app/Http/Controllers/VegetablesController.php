<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use View;
use App\FoodItemsModel;

class VegetablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $FoodModel = new FoodItemsModel();
        $foodColumn = $FoodModel->getFoodCategory();
        
        $foodData = $FoodModel->getFoodItem('VEGETABLES');
        $temp = array();
        if(count($foodData[0]) && is_array($foodData))
        {
            foreach($foodData as $val)
            {
                $temp[] = array(
                    'food_id'   => $val->id,
                    'food_name' => $val->name,
                    'food_desc' => $val->description,
                    'food_price' => $val->price
                );
            }
            
            $foodData = $temp;
        }
        
        return View::make('items.vegetables-item', compact('foodData', 'foodColumn'));
        //return response()->json(array('enum'=> $enum), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "HELLO!";
        //response()->json(array("dito ba yan? RESTful create?!"));
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
