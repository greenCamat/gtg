<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class FoodItemsModel extends Model
{
    public function getFoodCategory()
    {
        $food_category = DB::select( DB::raw("SHOW COLUMNS FROM food_category_tb WHERE Field = 'category'") )[0]->Type;
        preg_match('/^enum\((.*)\)$/', $food_category, $matches);
        $enum = array();
        foreach( explode(',', $matches[1]) as $value )
        {
            $v = trim( $value, "'" );
            $enum = array_add($enum, $v, $v);
        }
        
        return $enum;
    }
    
    public function getFoodItem($food_category)
    {
        $food_data = DB::select('SELECT 
                                    id, category, name, description, price 
                                FROM 
                                    food_category_tb 
                                WHERE 
                                    category = :category 
                                AND status_flag = 1', ['category' => $food_category]
                                );
        if(count($food_data[0]) && is_array($food_data))
            return $food_data;
        else
            return false;
    }
}
