<?php

use Illuminate\Database\Eloquent\Model as Model;

class SignupModel extends Model
{
    public $table = "user";
    public $timestamps = false;
    public $name = ['name'];
    public $password = ['matkhau'];
    public $email = ['email'];
}
