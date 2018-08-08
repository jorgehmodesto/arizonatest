<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model to manipulate countries records
 *
 * Class Countries
 * @package App
 */
class Countries extends Model
{
    /**
     * @var string
     */
    protected $table = 'countries';

    /**
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'country_code',
    ];
}
