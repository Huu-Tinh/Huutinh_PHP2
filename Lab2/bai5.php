<?php
class test1
{
    public $a = 'huutinh'; //Public được sử dụng mọi nơi
    protected $b = '2004'; //Protected được sử dụng trong class và kế thừa
    private $c = 'Angiang'; //Private chỉ được sử dụng trong class

    public function __construct()
    {
        echo $this->a;
        echo $this->b;
        echo $this->c;
    }
}
class test2 extends test1
{
    public function __construct(){
        echo $this->a;
        echo $this->b;
        // echo $this->c;
    }
}

$test1 = new test1();

$test1->a;
// $test1->b;
// $test1->c;

echo'<br>';
$test2 = new test2();

