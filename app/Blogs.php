<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    protected $fillable=['title','content','images'];

    public function category(){
     return $this->belongsTo('App\Category','category_id');
    }
}
