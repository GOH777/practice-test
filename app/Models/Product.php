<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'status','price', 'seller', 'buyer_id'];

    public function buyer()
    {
        return $this->belongsTo(Buyer::class);
    }

}
