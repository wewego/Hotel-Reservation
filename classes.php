<?php
 class Country
 {
   public $country;
   public function __construct($co)
   {
      $this->country = $co;
   }

 }
 class Hotel
 {
   public $hotel;
   public function __construct($ho)
   {
      $this->hotel = $ho;
   }
 }
 class RoomOptions
 {
   public $shape;
   public $type;
   public $time;
   public function __construct($sh , $ty , $ti)
   {
      $this->shape = $sh;
      $this->type = $ty;
      $this->time = $ti;
   }

 }
 class Form
 {
   public $fn;
   public $ln;
   public $email;
   public $pn;
   public $ID;
   public function __construct($fn , $ln , $email , $pn , $ID)
   {
      $this->fn = $fn;
      $this->ln = $ln;
      $this->email = $email;
      $this->pn = $pn;
      $this-> $ID = $ID;
   }
 }
 class Credit
 {
   public $credit;
   public $password;
   public function __construct($credit , $password)
   {
      $this->credit = $credit;
      $this->password = $password;
   }
 }
 ?>
