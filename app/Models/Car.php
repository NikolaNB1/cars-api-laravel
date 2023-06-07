<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public static function scopeSearchByBrand($brand)
    {
        return Car::where('brand', 'like', '%' . $brand . '%')->paginate(5);
    }

    public static function scopeSearchByModel($model)
    {
        return Car::where('model', 'like', '%' . $model . '%')->paginate(5);
    }

    public static function scopeSearchByBrandAndModel($brand, $model)
    {
        return Car::where('brand', 'like', '%' . $brand . '%')->where('model', 'like', '%' . $model . '%')->paginate(5);
    }
}
