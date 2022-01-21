<?php
//namespace work;
//
//include "blog/Page.php";
//include "news/Page.php";
//
//use \blog\Page as BlogPage;
//use \news\Page as NewsPage;
//
//$stringOne = new BlogPage();
//echo $stringOne->getStringOne() . "<br/>";
//
//$stringTwo = new NewsPage();
//echo $stringTwo->getString() . "<br/>";
//
//
//

//abstract class User
//{
//    abstract public function showRole();
//
//    public function getRole($name)
//    {
//        $this->name = $name;
//    }
//}
//class Admin extends User
//{
//    public function showRole()
//    {
//        return "admin";
//    }
//}
//
//class Visitor extends User
//{
//    public function showRole()
//    {
//        return 'admin Two';
//    }
//}
//
//$userAdmin = new Admin("Sergey");
//$userVisitor = new Visitor("Mandryk");
//
//echo $userAdmin->showRole() . "<br/>";
//echo $userVisitor->showRole() . "<br/>";
//// Interface
//
//interface Count
//{
//    public function count();
//}
//class Sum implements Count
//{
//    protected $x;
//    protected $y;
//
//    public function __construct($x,$y)
//    {
//        $this->x = $x;
//        $this->y = $y;
//    }
//
//    public function count()
//    {
//        return $this->x + $this->y;
//
//    }
//}
//
//class Multy implements Count
//{
//    protected $x;
//    protected $y;
//    public function __construct($x,$y)
//    {
//        $this->x = $x;
//        $this->y = $y;
//    }
//    public function count()
//    {
//        return$this->x * $this->y;
//    }
//
//}
//
//$CountableSum = new Sum(2,5);
//$CountableMulty = new Multy(2,5);
//
//echo $CountableSum->count() . "<br/>";
//echo $CountableMulty->count() . "<br/>";
//
//
//// InterfaceTwo
//interface ArrayCrudInterface
//{
//    public function create($Array);
//
//    public function read($key);
//
//    public function update($key,$element);
//
//    public function delete($key);
//}
//
//class ArrayCrud implements ArrayCrudInterface
//{
//    public $Array;
//    public function create($Array)
//    {
//        $this->Array = $Array;
//    }
//    public function update($key,$element)
//    {
//        $this->Array[$key] = $element;
//    }
//    public function read($key)
//    {
//        return $this->Array[$key];
//    }
//    public function delete($key)
//    {
//        unset($this->Array[$key]);
//
//        return $this->Array;
//    }
//}
//
//$createArray = new ArrayCrud();
//
//$createArray->create([1,2,3]);
//var_dump($createArray->Array);
//echo "<br/>";
//$createArray->update(3,0);
//var_dump($createArray->Array);
//echo "<br/>";
//var_dump($createArray->read(1));
//
//$createArray->delete(2);
//echo "<br/>";
//var_dump($createArray) ;
//
//
?>

<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="theme-color" content="#fafafa">
</head>

<body>
<script src="script.js">  </script>
<div class="form">
   <div>
        <form name='authorization' method='post' action='Form1.php'>
            <label> <input class="buttonTwo" type='submit' value='Войти' > </label>
        </form>
   </div>
    <div>
        <form name="registration" method="post" action="Form2.php">
            <label> <input class="buttonTwo" type="submit" value="Регистрация"> </label>
        </form>
    </div>
</div>

<?php
//
//class Clac {
//    var $param1 = 13;
//    var $param2 = -13;
//    // method:
//    public function Del()
//    {
//        echo $this->param1 / $this->param2 . "<br/>";
//    }
//    public function Umn()
//    {
//        echo $this->param1 * $this->param2 . "<br/>";
//    }
//    public function Vic()
//    {
//        echo $this->param1 - $this->param2 . "<br/>";
//    }
//    public function Sum()
//    {
//        echo $this->param1 + $this->param2 . "<br/>";
//    }
//}
//class Pow extends Clac{
//    public function PowTwo($a)
//    {
//        echo "Я степень!" . pow($this->param1,$a) . " ";
//        echo pow($this->param2, $a) . "<br/>";
//    }
//}
//$object = new Clac();
//$object3 = new Pow();
//
//$object->Del();
//$object->Umn();
//$object->Vic();
//$object->Sum();
//
//$object3-> PowTwo(2);
//
//
//class Worker
//{
//    var $name = "Иван";
//    var $age = 25;
//    var $salary = 1000;
//
//    var $name2 = "Вася";
//    var $age2 = 26;
//    var $salary2 = 2000;
//
//
//    public function getSalary()
//    {
//        echo $this->salary + $this->salary2 . "<br/>";
//    }
//
//    /**
//     * @return int
//     */
//    public function getAge()
//    {
//        echo $this->age + $this->age2 . "<br/>";
//    }
//}
//$object2 = new Worker();
//
//
//$object2->getSalary();
//
//$object2->getAge();



?>

<?php

?>
</body>
</html>