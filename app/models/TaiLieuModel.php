<?php

use Illuminate\Database\Eloquent\Model as Model;

class TaiLieuModel extends Model
{
	public $table = "tai_lieu";
	public $timestamps = false;
	public $fillable = ['name', 'id', 'img', 'noi_dung', 'view'];
}
