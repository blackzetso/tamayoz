<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }
 
    protected $fillable = [
        'hint1',
        'hint2',
        'hint3',
        'content',
        'min_price',
        'max_price',
        'img',
        'category_id',
        'lang'
    ];
}
