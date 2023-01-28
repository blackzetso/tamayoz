<?php

namespace App\Models;

//use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public function portfolios(){
        return $this->hasMany(Portfolio::class);
    }
    public function services(){
        return $this->hasMany(Service::class);
    }

    protected $fillable = [
        'name',
        'icon',
        'lang'
    ];
}
