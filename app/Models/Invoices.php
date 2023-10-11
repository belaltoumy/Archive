<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoices extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'selling_price',
        'Purchasing_price',
    ];
    public function Product() {
        return $this->belongsTo(Products::class);
    }
}
