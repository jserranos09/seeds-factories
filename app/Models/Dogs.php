<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Dogs extends Model
{
    use HasFactory;
    /*
    function dogsRequiringAntiRabbitBiteShot(){
        return $this->ageGreaterThan(6);
    }

    function scopeAgeGreaterThan($query, $age) {
        return $query->where('age', '>', $age);
    }
    */
        protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('age', function (Builder $builder) {
            $builder->where('age', '>', 8);
        });
    }
}
