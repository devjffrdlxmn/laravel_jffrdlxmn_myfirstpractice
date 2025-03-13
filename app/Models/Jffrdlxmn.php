<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jffrdlxmn extends Model
{
    protected $fillable = ['name','skill','bio'];

    /** @use HasFactory<\Database\Factories\JffrdlxmnFactory> */
    use HasFactory;

    public function dojo()
    {
        return $this->belongsTo(Dojo::class);
    }
}
