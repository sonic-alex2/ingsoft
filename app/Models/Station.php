<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Station
 *
 * @property $id
 * @property $location
 * @property $name
 * @property $parking_slots
 * @property $max_people
 * @property $person_id
 * @property $access_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Access $access
 * @property Person $person
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Station extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['location', 'name', 'parking_slots', 'max_people', 'person_id', 'access_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function access()
    {
        return $this->belongsTo(\App\Models\Access::class, 'access_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function person()
    {
        return $this->belongsTo(\App\Models\Person::class, 'person_id', 'id');
    }
    
}
