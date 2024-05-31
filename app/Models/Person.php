<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Person
 *
 * @property $id
 * @property $name
 * @property $dpi
 * @property $address
 * @property $phone
 * @property $history
 * @property $note
 * @property $person_type_id
 * @property $created_at
 * @property $updated_at
 *
 * @property PersonType $personType
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Person extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name', 'dpi', 'address', 'phone', 'history', 'note', 'person_type_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personType()
    {
        return $this->belongsTo(\App\Models\PersonType::class, 'person_type_id', 'id');
    }
    
}
