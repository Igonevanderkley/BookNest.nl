<?php
namespace App\Models;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'orderItems';

    protected $fillable = [
        'orderId',
        'productId',
        'quantity',
    ];

    public function book()
    {
        return $this->hasMany(Book::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'orderId');
    }
}
