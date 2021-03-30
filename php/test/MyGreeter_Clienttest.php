<?php
require_once("../MyGreeter/Client.php");
class MyGreeter_Clienttest
{   
    protected $greeter;

    public function __construct()
    {
        $this->greeter = new MyGreeter\Client();
    }
    public function test_getGreeting()
    {   
        $this->greeter->getGreeting();
    }
}
$obj = new MyGreeter_Clienttest();
echo $obj->test_getGreeting();