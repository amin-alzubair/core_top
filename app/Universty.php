<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Ticket;

class Universty extends Model
{
    protected $guarded=[];
    
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
