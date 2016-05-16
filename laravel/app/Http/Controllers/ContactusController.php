<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;
use App\ItemsModel;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $ItemsModel = $this->initiateItem();
        $itemColumn = $ItemsModel->getItemCategory();
        
        $itemData = $ItemsModel->getItem('CHIPS');
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
        
        return View::make('pages.contactus', compact('itemData', 'itemColumn'));
        //return response()->json(array('enum'=> $enum), 200);
    }
    
    private function initiateItem()
    {
        $ItemsModel = new ItemsModel();
        return $ItemsModel;
    }
    
    public function getChipnsnacksitem()
    {
    }
}
