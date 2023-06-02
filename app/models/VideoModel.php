<?php
use Illuminate\Database\Eloquent\Model as Model;
class VideoModel extends Model {
    public $table="video";
	public $timestamps=false;
	public $fillable=['ten','id','khoa-hoc-id','mota','link-video','like','view'];
}
?>