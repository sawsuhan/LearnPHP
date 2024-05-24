<?php
class saw
{


public function su()
{
    echo "hello from saw";

}
}
 $saw = new saw();

 $saw->su();

 class han
 {
    public function su()
    {
        echo "hello from han";
    
    }
    }
     $saw = new han();
    
     $saw->su();
     
 

class Student
{
      public $name ="saw su"  ;
//method
      public $age =20;

      public $major ="CS";

      public function greet()//method
      {
        echo  "hello world";
      }

      public function info(){
     
echo $this->name ."-".$this->age."-".$this->major;   }
    }

    $student = new student();

    echo $student->info();//object instantiation
echo $student->greet();

//method functions are called method in OOp
//properties are variables and arrays
//declare class
//objects
//instantiations
?>
