<?php
use Illuminate\Database\Eloquent\Model as Model;
class TraLoiModel extends Model {
    public $table="tra_loi";
	public $timestamps=false;
	public $fillable=['id','noi_dung','cau_hoi_id','user_id','ngay_gio','like'];
}
?>