<?php
/**
 * @author freegeek
 * 以毫秒、微妙时间戳为依据生成唯一id
 */
class timeUniqueId{

    function getMillisecond(){
        list($s1, $s2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
    }
    
   
    
    /**
     * microsecond 微秒   millisecond 毫秒
     *返回时间戳的毫秒数部分
     */
    function get_millisecond(){
        list($usec, $sec) = explode(" ", microtime());
        $msec=round($usec*1000);
        return $msec;
    }
    
    /**
     *
     *返回字符串的毫秒数时间戳
     */
    function get_totalMillisecond(){
        $time = explode (" ", microtime () );
        $time = $time [1] . ($time [0] * 1000);
        $time2 = explode ( ".", $time );
        $time = $time2 [0];
        return $time;
    }
     
    /**可附加随机数*/
    function appendRandom(){
        return mt_rand(0,100);
    }
    
}

$obj=new timeUniqueId;

echo date('dmsHis').$obj->get_millisecond().'<br />';
 
 
 
 
 