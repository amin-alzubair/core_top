<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class Department extends Model
{
    protected $guarded=[];


    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

}
