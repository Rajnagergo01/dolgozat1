<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes

class könyv extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['cím','szerző','műfaj_id','kiadás_dátum'];

    public function műfaj()
    {
        return $this->belongsTo(Műfaj::class);
    }

    public function kölcsönzés()
    {
        return $this->hasMany(kölcsönzés::class);
    }
}
?>