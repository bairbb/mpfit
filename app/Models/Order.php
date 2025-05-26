<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'lastname',
        'name',
        'surname',
        'status',
        'comment',
        'product_id',
        'quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function getFullNameAttribute()
    {
        return trim($this->lastname . ' ' . $this->name . ' ' . $this->surname);
    }
}
