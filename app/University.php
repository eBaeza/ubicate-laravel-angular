<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'universities';
 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'country'];

    /*
    * Relationship with careers
    */
    public function careers()
    {
        return $this->belongsToMany('\App\Career', 'career_universities')
                    ->select('careers.id', 'name', 'area');
    }
}
