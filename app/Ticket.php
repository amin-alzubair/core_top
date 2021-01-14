<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Universty;

class Ticket extends Model
{
    protected $guarded=[];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function universty(){
        return $this->belongsTo(Universty::class,'university_id');
    }
}
