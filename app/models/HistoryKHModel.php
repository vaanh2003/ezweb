<?php

use Illuminate\Database\Eloquent\Model as Model;

class HistoryKHModel extends Model
{
	public $table = "history_khoa_hoc";
	public $timestamps = false;
	public $fillable = ['name', 'id', 'khoa_hoc_id', 'user_id', 'ngay_gio'];
}