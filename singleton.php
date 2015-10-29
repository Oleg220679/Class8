<?php

// Одинак 
  class Singleton
{
    //оголошується змінна, яка може викликатися в наслідуваних об'єктах
    protected $i;
    //оголошується властивість, яка буде використана в методі і зазамовчуванням рівна null
    private static $instance = null;
    
    // метод відтворює екземпляр класу тільки один раз, а далі повертає той же trptvgkzh
     
       public static function getInstance() {
    if (self::$instance === null) {
      self::$instance = new self;
    }
        return self::$instance;
    }

    //обмежується використання методу __construct()
    private function __construct()
    {
    }

   //обмежується використання методу __clone()
    private function __clone()
    {
    }

   //обмежується використання методу __sleep()
    private function __sleep()
    {
    }

    //обмежується використання методу __sleep()
    private function __wakeup()
    {
    }
}

// =====================================
 //          приклад використання Одинака
 // =====================================
 //створення нового об'єкту неможливо
//$i = new Singleton; // не дає

//різним змінним присвоюється єдиний доступний метод Одинкака
$firstProduct = Singleton::getInstance();
$secondProduct = Singleton::getInstance();
$thirdProduct = Singleton::getInstance();


// властивості b присвоюються різні параметри
$firstProduct->b = 'pen';
$secondproduct->b = 'book';
$thirdProduct->b = 'pencil';


//в результаті повертається один і той же об"єкт
print $firstProduct->b; print "<br>";
// pencil
print $secondProduct->b; print "<br>";
// pencil
print $thirdProduct->b; print "<br>";
// pencil
?>