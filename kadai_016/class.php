<?php
  class Food {
      private $name;
      private $price;
     
      public function __construct($name, $price) {
          $this->name = $name;
          $this->price = $price;
      }
      public function show_price() {
        echo $this->price . '<br>';
    }
   }
   class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct($name,$height,$weight){
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
    public function show_height() {
      echo $this->height . '<br>';
     }
   }
   $potato = new Food("potato", 250);
   $dog = new Animal("dog", 60, 5000);
   
   print_r($potato);
   print_r($dog);

   $potato->show_price(). '<br>';
   $dog->show_height(). '<br>';

?>
