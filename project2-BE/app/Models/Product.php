<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ["manufacturer_id","name","price","quantity","image"];
    public  function manufacturers()
    {
        return $this->belongsTo(Manufacturers::class,"manufacturer_id");
    }
}
