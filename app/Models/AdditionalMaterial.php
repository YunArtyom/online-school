<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class AdditionalMaterial extends Model
{
    protected $fillable = ['name', 'description', 'link', 'price_usd', 'price_rub', 'price_won'];
}
