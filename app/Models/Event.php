<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected  $guarded = ['id'];
    protected $dates = ['event_date','start', 'end'];

    function   rel_to_user(){
        return $this-> belongsTo(User::class,'user_id');
    }


}
