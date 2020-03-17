<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomCategory extends Model
{
    public function rooms(){
        return $this->hasMany('App\Room', 'category', 'id');
    }

}
