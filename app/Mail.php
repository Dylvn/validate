<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mail extends Model
{
    public $timestamps = false;

    protected $fillable = ['name', 'email', 'content'];
}