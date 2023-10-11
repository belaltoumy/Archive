<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categores extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price',
    ];
    public function Products()
    {
        return $this->hasMany(Products::class);
    }
}
