<?php
namespace MyGreeter;

/*
* 编写一个类，该类在被实例化时根据时间返回早、中、晚问候语，例如:
*早上6点之后，晚上12点，早上好
*下午12点之后6点之前 下午好
*下午6点之后和早上6点之前 晚上好
* */

//定义时区
date_default_timezone_set("Asia/Shanghai");

class Client{
    /*
    * 定义变量
    * */
    protected $nowTime;

    /*
    * 初始化
    * */
    public function __construct(){
        $this->nowTime = date("H");
    }

    /*
    * 根据当前时间戳进行区间判断
    * return string|bool
    * */
    public function getGreeting(){
        if (!$this->nowTime){
            return false;
        }
        if ($this->nowTime > 6 && $this->nowTime < 12) {
            return "早上好!";
        } else if ($this->nowTime > 12 && $this->nowTime < 18) {
            return "中午好!";
        } else if ($this->nowTime > 18 && $this->nowTime < 24) {
            return "晚上好";
        }
    }
}

//$obj = new Client();
//$info $obj->getGreeting();
//echo $info;
?>