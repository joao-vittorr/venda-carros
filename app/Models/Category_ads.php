<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_ads extends Model {
    use HasFactory;

    protected $fillable = ['advert_id','category_id'];
}
