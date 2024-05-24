<?php
class student
{
    public function __construct()
    {

echo "helloo welcome from PHP";
    }

    
    public function read(){
        echo "This is from read method";
    }
}
$student=new student();
$student->read();
