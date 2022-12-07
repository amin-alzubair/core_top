<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Department;
use App\Universty;
use Carbon\Carbon;

class Ticket extends Model
{
    protected $guarded = [];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
