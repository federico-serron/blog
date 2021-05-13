<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //RELACION 1 A 1 POLYMORPHIC
    public function imageable(){
        return $this->morphTo();
    }
}
