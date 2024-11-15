<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kölcsönzés extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['email', 'köny_id', 'kölcsönzés_dátuma', 'visszahozás_dátuma'];

    public function könyv()
    {
        return $this->belongsTo(Könyv::class);
    }
}
