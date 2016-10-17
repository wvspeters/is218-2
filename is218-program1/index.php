<pre>
<?php
  //This is how you print text in php  
  echo 'hello world';
  //This is how you store a value in a variable 
  $myvar = 'Some Text I want to store in a variable';

  //this is an example of the difference between single quotes and double quotes
  echo '<br>';
  echo '$myvar';
  echo '<br>';
  echo "$myvar";

  //this is an example of php arrays

  $myarray = array();
  //this is how you add values to an array
  $myarray[] = 'some value 1';
  $myarray[] = 'some value 2';
  $myarray[] = 'some value 3';

  print_r($myarray);
  //this is an example of an associative array and a nested array
  $myAssoc = array('value1' => $myarray, 'value2' => $myarray);

  print_r($myAssoc);
  // this is how you print_r / access a array by naming the key you want to access
  print_r($myAssoc['value1']);

  //This is how you define a class in php 
  class myclass {
    public $myPublic;
    private $myPrivate;
    protected $myProtected;

    public function __construct() {
     //$this is the internal reference to the object witin a class, the arrow points
     //The arrow points to the property or method being accessed within the object
      $this->myPublic = 1;
      $this->myPrivate = 2;
      $this->myProtected = 3;
    //this is how you call a method inside an object and pass a value;
      $this->sayHello('Keith');
    }
    public function sayHello($name) {
   
      echo 'Hello ' . $name . "<br>";   
    }


  }
  //This is how you instantiate a new class object
  $obj = new myclass;

  print_r($obj);
























?>
</pre>
