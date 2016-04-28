<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content'
    ];

    public function user()
    {
        $this->belongsTo('App\User');
    }

    public function category()
    {
        $this->hasOne('App\Category');
    }
}
