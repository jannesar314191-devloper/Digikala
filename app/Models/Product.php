<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['id','name','image','status','description','inventory','category_id','price'];
   
   
   
    public function Category (){
        return $this->belongsTo(Category::class);
    }
}
