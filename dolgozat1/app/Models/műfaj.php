<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class műfaj extends Model
{
    use HasFactory;

    protected $fillable = ['név'];

    public function könyvek()
    {
        return $this->hasMany(Könyv::class);
    }
}
