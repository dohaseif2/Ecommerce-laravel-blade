<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'total_price', 'user_id', 'phone', 'address', 'status'
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
