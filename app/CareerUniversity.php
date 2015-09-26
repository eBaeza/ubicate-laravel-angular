<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CareerUniversity extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'career_universities';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['career_id', 'university_id'];
}
