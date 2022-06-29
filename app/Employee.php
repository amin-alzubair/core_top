<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $guarded=[];

    public function expenses(){
        return $this->hasMony('App\Expense');
    }

    public function revenue(){
        return $this->hasMony('App\Revenue');
    }
}
