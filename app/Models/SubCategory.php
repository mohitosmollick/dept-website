<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubCategory extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected  $guarded = ['id'];

    function   rel_to_user(){
        return $this-> belongsTo(User::class,'user_id');
    }
    function rel_to_category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
}
