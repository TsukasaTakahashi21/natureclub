<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $fillable = ['product_id', 'image_path'];

    public function product()
    {
        // 商品画像は1つの商品のもの（1対1の関係）
        return $this->belongsTo(Product::class);
    }
}
