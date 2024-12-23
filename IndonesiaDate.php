<?php

namespace dakodig\yii2indonesiadate;

use yii\base\Model;

/**
 * This is just an example.
 */
class IndonesiaDate extends Model
{
    public function __construct($config = [])
    {
        date_default_timezone_set("Asia/Jakarta");
    }

    public static function now(){
        $now = date("Y-m-d H:i:s");
        return $now;
    }
}
