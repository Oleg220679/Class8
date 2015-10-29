<?php
  //існує інтерфейс iMain, з яким працює клієнтський код
  interface iMain {
   public function send();
  }
  // також існує інтерфейс iAdaptee, з яким клієнтський код не може працювати
  interface iAdaptee {
   public function inquiry();
  }
  // клас  Adaptee реалізує інтерфейс Adaptee, а саме повертає стрічку у вигляді CLASS::METHOD
  //
  class Adaptee implements iAdaptee {
   public function inquiry() {
    return __CLASS__."::".__METHOD__;
   }
  }
  // клас шаблону Adapter крім того, що реалізує інтерфейс iMain,
  //створює об"єкт класу Adaptee
  class Adapter implements iMain {
   //тут створюється захищена властивість $adaptee, яка має значення null
   protected $adaptee = null;
   //викликається магічний метод __construct(), в якому у властивість $adaptee записується 
   //створений об"єкт класу Adaptee
   public function __construct() {
    $this->adaptee = new Adaptee();
   }
   //в методі send() інтерфейсу iMain повертається метод inquiry() інтерфейсу Adaptee
   public function send() {
    return $this->adaptee->inquiry();
   }
  }
  //створюється об'єкт шаблону Адаптер, який викликає метод send()
  $goal = new Adapter();
  echo $goal->send(); // таким чином Адаптер викликав через метод інтерфейсу iMain
  //реалізацію інтерфейсу Adaptee
  ?>