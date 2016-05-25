<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ItemsModel extends Model
{
    public function getItemCategory()
    {
        $Item_category = DB::select( DB::raw("SHOW COLUMNS FROM items_tb WHERE Field = 'category'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $Item_category, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        
        return $enum;
    }
    
    public function getItem($Item_category)
    {
        $item_data = DB::select('SELECT 
                                    id, category, brand, name, description, remain_stocks, price, status_flag 
                                FROM 
                                    items_tb 
                                WHERE 
                                    category = :category 
                                AND status_flag = 1', ['category' => $Item_category]
                                );
        if(count($item_data[0]) && is_array($item_data))
            return $item_data;
        else
            return false;
    }
}
