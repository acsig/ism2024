<?php

namespace ism\webappgit;

class Teachersclass
{

    public function heyTeacher()
    {
        echo "Leave us kids alone";
    }
    public function justAnother()
    {
        echo "brick in the wall";
    }
    public function weDont()
    {
        echo "need no education";
    }


}
class Yaroslavsclass{
    public $res = 0;
    public function sum($num1, $num2){
        $this->res = $num1 + $num2;
        return $this->res;
    }
}
