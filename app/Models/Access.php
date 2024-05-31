<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Access
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Access extends Model
{

    protected $perPage = 20;

    protected $table = "access";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];


}
