<?php
/*
 * Write a program to implement pow(a,b) without loops
 */

$a = 10;
$p = 2;

/*Using inbuilt php functions*/
$fill = array_fill(0, $p,$a);
$res = array_product($fill);
echo "Res : ".$res;

/* Custom Solution */
class GetPower{
    public $count;
    public $num;
    public $power;
    public $res;
    public function __construct($num, $p)
    {
        $this->num = $num;
        $this->power =$p-1;
        $this->count = 0;
        $this->res = 0;
    }

    public function power(){
        if($this->count == 0 ){
             $this->res = $this->num * $this->num;
             $this->count++;
             return self::power();
        }else if($this->count < $this->power){
            $this->res = $this->res * $this->num;
            $this->count++;
            return self::power();
        }else{
            return $this->res;
        }
    }
}

$pow = new GetPower(10, 4);
echo "Power : ".$pow->power()."\n";


