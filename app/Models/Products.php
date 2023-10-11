<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'price',
    ];
    public function Category() {
        return $this->belongsTo(Categores::class);
    }
    public function Invoice() {
        return $this->belongsTo(Invoices::class);
    }
}
