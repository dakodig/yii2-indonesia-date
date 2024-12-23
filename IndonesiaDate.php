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
        $exp1 = explode("-", $exp[0]);
        $datetime = new \DateTime();
        if(count($exp1)>=3){
            return $datetime->setDate($exp1[0],$exp1[1],$exp1[2])->format($format);
        }
    }
}
