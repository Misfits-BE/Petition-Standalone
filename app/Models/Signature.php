<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Signature
 * 
 * @package App\Models
 */
class Signature extends Model
{
    /**
     * Mass-assign fields for the database table 
     * 
     * @return array 
     */
    protected $fillable = ['name', 'email', 'location'];
}
