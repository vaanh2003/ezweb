<?php
use Illuminate\Database\Eloquent\Model as Model;
class CauHoiModel extends Model {
    public $table="cau_hoi";
	public $timestamps=false;
	public $fillable=['id','noi_dung','ten_khoa_hoc','user_id','ngay_gio','like','tra_loi'];
}
?>