<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    public $timestamps = false;
    protected $table = 'usuario';
    protected $fillable = ['email', 'senha', 'remember_token'];


}
