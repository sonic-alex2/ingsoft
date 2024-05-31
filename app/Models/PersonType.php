<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PersonType
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Person[] $people
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class PersonType extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function people()
    {
        return $this->hasMany(\App\Models\Person::class, 'id', 'person_type_id');
    }
    
}
