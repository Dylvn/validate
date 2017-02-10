<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'img', 'synopsis', 'realisateur'];

    public function categories()
    {
        return $this->belongsToMany('App\Categorie');
    }
}
