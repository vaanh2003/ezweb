<?php
use Illuminate\Database\Eloquent\Model as Model;
class UserModel extends Model {
    public $table="users";
	public $timestamps=false;
	public $fillable=['id','name','role','password','email','img'];
}
?>