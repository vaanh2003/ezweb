<?php

use Illuminate\Database\Eloquent\Model as Model;

class KhoaHocModel extends Model
{
	public $table = "khoa_hoc";
	public $timestamps = false;
	public $fillable = ['name', 'id', 'img', 'mo_ta', 'view', 'loaikh'];
}
