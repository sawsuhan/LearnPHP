<?php

class student
{
    public function read(){
        echo "This is Read Method";
    }
    public function play(){
        echo "THis is play method";
    }
    public function rest(){
        echo "This is rest method";
    }
}

class UniStudent extends student
{
    public function game(){
        echo "This is game Method";
    }
}
$student=new Unistudent();
$student->game();



//you need to use extends in inheritance 
