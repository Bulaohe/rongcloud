<?php
/**
 * User: Quan
 */

namespace Quan\Sdk\Rongcloud;


class RongyunEntrance
{

    public static function init(){
        $conf = config('union.sdk.rongyun');

        $appKey = $conf['appKey'];
        $appSecret = $conf['appSecret'];
        return new RongCloud($appKey,$appSecret);
    }
}