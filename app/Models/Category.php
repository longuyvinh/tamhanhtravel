<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model{
	    
	protected $table = 'category';
	protected $guarded = ['id'];
    protected $attributes = ['column1' => 'id', 'column2' => ''];

    public function parent()
    {
        return $this->belongsTo('App\Models\Category', 'idparent');
    }

    public function children()
    {
        return $this->hasMany('App\Models\Category', 'idparent');
    }


    public static function getCategoryTourRoot(){
        return Category::where(['idparent'=> '1', 'status' => '1'])->get();
    }

    public static function getCategorySub($cat_id){
        $resutl = array();
        $list = Category::where(['idparent'=> $cat_id, 'status' => '1'])->get();

        if(count($list) > 0){
            foreach ($list as $key => $value) {
                $item = array();
                $item['data'] = $value->getAttributes();
                $item['sub'] = Category::getCategorySub($value->id);
                $resutl[] = $item;
                unset($item);
            }
            return $resutl;
        }else{
            return null;
        }
    }
}
