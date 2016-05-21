<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;
use App\ItemsModel;

class ShopItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itemColumn = array();
        $itemData = array();
        return View::make('pages.shop', compact('itemData', 'itemColumn'));
    }
    
    private function initiateItem()
    {
        $ItemsModel = new ItemsModel();
        return $ItemsModel;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return "function create() called!";
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
    public function show($item)
    {
        $ItemsModel = $this->initiateItem();
        $itemColumn = $ItemsModel->getItemCategory();
        
        $itemData = [];
        $temp = array();
        $pageView = 'items.shop-items';
        $food_category_arr = array(
            "VEGETABLES",
            "FRUITS",
            "MEATFISH",
            "CONDIMENTS",
            "DAIRY",
            "CHIPSNACKS",
            "INSTANTFOOD",
            "RICE",
            "SUPPLIES",
            "BEVERAGES",
            "TOILETRIES",
            "OTHERSERVICES"
        );
        $item = strtoupper($item);
        
        // if($item === 'VEGETABLES')
        // {
        //     $pageView = 'items.vegetables-item';
        // }
        
        if(in_array($item, $food_category_arr))
        {
            $itemData = $ItemsModel->getItem($item);
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
            //this will return the VIEW for the selected item
            return View::make($pageView, compact('itemData', 'itemColumn'));
        }
        else {
            $this->index();
        }
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