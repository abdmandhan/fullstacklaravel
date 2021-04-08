<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $appends = [
        'price_rp'
    ];

    public function getPriceRpAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
}
