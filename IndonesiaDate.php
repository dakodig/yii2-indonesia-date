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
        setlocale(LC_ALL, 'id');
    }

    public static function now(){
        $now = date("Y-m-d H:i:s");
        return $now;
    }
    public static function create($datetime,$format = 'Y-m-d H:i:s')
    {
        $exp = explode(" ", $datetime);
        $date = $exp[0];
        $time = $exp[1];
        $datetime = new \DateTime();
        return $datetime->format($format);
    }
}
