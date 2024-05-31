<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Bus
 *
 * @property $id
 * @property $name
 * @property $registration
 * @property $model
 * @property $manufacturer
 * @property $max_capacity
 * @property $notification
 * @property $route_time
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Bus extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'registration', 'model', 'manufacturer', 'max_capacity', 'notification', 'route_time'];


}
