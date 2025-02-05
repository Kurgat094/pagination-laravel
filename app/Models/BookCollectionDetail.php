<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCollectionDetail extends Model
{
    protected $fillable = [
        'bookname',
        'author',
        'price',
        'description',
        'image',
    ];
}
