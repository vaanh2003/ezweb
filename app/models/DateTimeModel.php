<?php
use Illuminate\Database\Eloquent\Model as Model;
class DateTimeModel extends Model {
    public function getCurrentDateTime() {
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        return date('Y-m-d H:i:s');
    }
}
?>