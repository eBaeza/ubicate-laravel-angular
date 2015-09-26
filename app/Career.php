<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'careers';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name_career', 'area_career'];

    /*
    * Relationship with universities
    */
    public function universities()
    {
        return $this->belongsToMany('\App\University', 'career_universities')->withPivot('university_id');
    }
}
