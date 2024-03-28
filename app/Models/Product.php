<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=['name','description','price','expiry date','quantity'];
    protected $guarded=['id','create_at','update_at'];
  
    public function orders()
    {
      return $this->hasMany(Order::class);
    }



}
