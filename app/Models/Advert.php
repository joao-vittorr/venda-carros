<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advert extends Model
{

use HasFactory, SoftDeletes;

protected $fillable = [
    "title",
    "model",
    "color",
    "mult",
    "manuf_year",
    "mileage",
    "price",
    "photo",
    "description",
    "user_id",
    "category_id",
    "type_id"
];

public function setPriceAttribute($valor){
    $this->attributes['price']=str_replace([".",","],["","."], $valor);

}

public function user(){
    return $this->belongsTo(User::class);
}

public function type(){
    return $this->belongsTo(Type::class);
}

public function category(){
    return $this->belongsTo(Category::class);
}
}

