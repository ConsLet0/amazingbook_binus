<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function account(){
        return $this->belongsTo(account::class);
    }

    public function ebook(){
        return $this->hasMany(ebook::class);
    }
}
