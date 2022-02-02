<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    /**
    * The attributes that are mass assignable.
    *
    * @var string[]
    */
    protected $fillable = [];

    /**
        * The attributes that aren't mass assignable.
        *
        * @var string[]|bool
        */
    protected $guarded = ['*', 'id'];

    public function pizzas(){
        return $this->belongsToMany(Pizza::class);
    }
}
