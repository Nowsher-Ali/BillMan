<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colony extends Model
{
    use HasFactory;
    public $timestamps=false;
    public function buildings(){
        return $this->hasMany(building::class,'colonyCode');
    }
}
