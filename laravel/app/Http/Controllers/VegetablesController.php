<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;
use App\ItemsModel;

class VegetablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // TODO additional checkking?
        //return View::make('items.vegetables-item', compact('itemData', 'itemColumn'));
    }
    
    private function initiateItem()
    {
        $ItemsModel = new ItemsModel();
        return $ItemsModel;
    }
    
    public function getVegetablesItem()
    {
        $ItemsModel = $this->initiateItem();
        $itemColumn = $ItemsModel->getItemCategory();
        
        $itemData = $ItemsModel->getItem('VEGETABLES');
        $temp = array();
        if(count($itemData[0]) && is_array($itemData))
        {
            foreach($itemData as $val)
            {
                $temp[] = array(
                    'item_id'   => $val->id,
                    'item_name' => $val->name,
                    'item_desc' => $val->description,
                    'item_price' => $val->price
                );
            }
            
            $itemData = $temp;
        }
       return response()->json(array('data'=> $itemData, 'itemColumn'=>$itemColumn), 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return "Vegetables Controller function create is call!";
        return response()->json(array("dito ba yan? RESTful create?!"));
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