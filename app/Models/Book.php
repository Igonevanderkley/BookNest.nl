<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'books';

    protected $fillable = [
        'title',
        'author',
        'genreId',
        'description',
        'price',
        'stockedQuantity'
    ];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}
