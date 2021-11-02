<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title'];

    /**
     * getting array for select option 
     */

    public static function arrayForSelect()
    {
        $arr = [];

        $groups = Group::all();
        
        foreach($groups as $group){
            $arr[$group->id] = $group->title;
        }

        return $arr;
    }
}
