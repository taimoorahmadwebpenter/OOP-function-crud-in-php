<?php
// class myclass
// {
//     function msg(){
//         echo "this is msg from server";
//     }
//     function newmsg(){
//         echo "hello";
//     }
// }
// class newc{
//     public $a =10;
//     function showval(){
//             return $this->a;
//     }
// }
// $obj = new newc();
// echo $obj->a;
// $obj = new myclass();
// $obj->msg();
// $obj->newmsg();


                                        //Topic constructor and destructor

// class mynew{
//  function __construct(){
//     echo "this is constructor";
//  }
//  function myf(){
//     echo "this is function";

//  }
//  function __destruct(){
//     echo "this is destructor";
//  }
// }
// $obj = new mynew();
// $obj->myf(); 

                        //Topic example php inheritance | php oop 

//    class base{
//     function __construct(){
//         echo "this constructor is base class";
//     }
//    }                     
//    class child extends base{
//     function __construct(){
//         parent::__construct();
//         echo "this constructor is child class"
//     }
//    }
//    $obj = new child();


                                //php encapsulation | php oop Topic
                                //public method 
    // class class1{
    //     public $number;
    //     function __construct(){
    //       echo  $this->number=50574; 
    //     }
    // }      
    // $obj = new class1();  
    // echo $obj->number=25;

                            //protected method getter and setter in php encapsulation
    // class class1{
    //  protected $number;
    // function __construct(){
    //     $this->number=50574; 
    //  }
    //  function setval(){
    //     $this->number=1000;
    //  }

    //  function getval(){
    //     return $this->number;
    //  }
    //  }      
    
    // $obj = new class1();  
    // echo $obj->setval();  
    // echo $obj->getval();       
    
                            // //protected method private in php encapsulation
// class class1{
//      private $number;
//     function __construct(){
//     $this->number=12345; 
//     }
//     }
//     class class2 extends class1{
//         return $this->number;
//     }      
                               
//     $obj = new class2();  
     
//     echo $obj->getval();


                        //php abstraction | php oop  | abstraction in php 

// abstract class abc{
//     abstract function mymsg();

// }
// class xyz extends abc{
//  function mymsg(){
//     echo "data abraction"
//  }
// }
// $obj = new xyz();
//  $obj->mymsg();
                                //interface vs abstraction
// interface inter1{
// public function sum();
// public function sub();
// }  
//  class child implements inter1{
//    function sum(){
//     echo 10+5;
//    }
//    function sub(){
//     echo 10-5;
//    }
//  }  
//  $obj = new child();
//  $obj->sum();
//  echo "<br>" 
//  $obj->sub();    

                          //static members oop php
// class abc{
//     public static $name ='new coding';
//     public static function show(){
//         echo self::$name;
//     }
// }

// class xyz extends abc{
//     public static function show(){
//         echo parent::$name;
//     }
// }
// $obj = new xyz;
// $obj->show();
// echo abc::$name;
// echo '<br>';
// abc::show();


///:45        php traits | php oop in hindi | traits in php | trait in php

// class class1{
//  public function func1(){
//     echo "func 1";
//  }
// }
// class class2 extends class1{
//     public function func1(){
//         echo "func 1";
//      }
// }
// class class3 extends class2{
//     public function func1(){
//         echo "func 1";
//      }
// }
// class class4 extends class3{
//     public function func1(){
//         echo "func 1";
//      }
// }
// $obj = new class4();
// $obj->func1();

                                    //trait
// trait trait1{
//     public function showmsg(){
//         echo "this is trait1";
//     }
// }

// trait trait2{
//     public function showm(){
//         echo "this is trait2";
//     }
// }
// class a{
//     use trait1,trait2;
//     public function show(){
//         echo "class a";
//     }
// }
// class b{
//     use trait1;
// }
// $obj =new a;
// $obj1 = new b;
// $obj->showmsg();
// echo"<br>";
// $obj->showm();
// $obj->show();
// echo"<br>";
// $obj1->showmsg();

?>