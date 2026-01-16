<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'category_id',
        'in_stock',
        'rating'
    ];
    protected $casts = [
        'price' => 'float',
        'in_stock' => 'boolean',
        'rating' => 'float',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    protected $attributes = [
        'in_stock' => true,
        'rating' => 0.0
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
