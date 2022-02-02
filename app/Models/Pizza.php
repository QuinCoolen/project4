<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
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

    
    public function priceForDisplay()
    {
        $price = $this->prijs * 100;

        return "€" . substr($price, 0, -2) . "," . substr($price, -2);
    }
}
