<?php
include 'VarDumper.php';

class action
{
    public $name;
    public $descr;
    public $direction;
    public $price;
    public $photo_url;

    function doit()
    {
        $this->name = $this->name = $_POST['name'];
        $this->descr = $this->descr = $_POST['descr'];
        $this->direction = $this->direction = $_POST['direction'];
        $this->price = $this->price = $_POST['price'];
        $this->photo_url = $this->photo_url = $_POST['photo_url'];
    }

}

class anotherone extends action
{

    public $new = "test2";

    function doit()
    {
        parent::doit();
    }
}

$test = new action();

$test->doit();
VarDumper::dump($test, 10, true);

$test2 = new anotherone();

$test2->doit();
VarDumper::dump($test2, 10, true);

?>
