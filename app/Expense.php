<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\User;
class Expense extends Model
{
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }


}
