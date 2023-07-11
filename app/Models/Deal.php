<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    public function deal_product()
    {
        return $this->hasMany(DealProduct::class,'deal_id','id');
    } 
}
