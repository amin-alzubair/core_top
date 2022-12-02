<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Universty;

class Ticket extends Model
{
    protected $guarded = [];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
