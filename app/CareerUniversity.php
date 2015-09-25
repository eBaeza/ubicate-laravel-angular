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
    protected $table = 'career-universities';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_career', 'id_university'];
}
