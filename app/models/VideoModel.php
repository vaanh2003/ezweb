<?php
use Illuminate\Database\Eloquent\Model as Model;
class VideoModel extends Model {
    public $table="video";
	public $timestamps=false;
	public $fillable=['name','id','khoa_hoc_id','mota','link_video','like','view'];
}
?>