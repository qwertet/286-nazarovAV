<?php
include 'VarDumper.php';
class Laska
{
    public $color = 'beautiful';
    public $length = 19;
    public $legs = 4;
    public $eye = 2;
    public $speed = 0;
    public $jump_length = 0;
    public $hunger = 10;
    public $death = 'false';
    public $health = 10;
    public $exp = 0;
    public $level = 0;

    //public function say4(){}
    public function expCheck()
    {
        if ($this->exp >= 10)
        {
            $this->level++;
            $this->say2('Уровень повышен! Ваш уровень: ' . $level); //доделать  upd так и не доделал
            
        }

    }

    public function say2($text)
    {
        echo $text;
    }

    /*public function sayGreenGuys($text)
    {
    echo 'Вам пришло письмо от Гринпис с таким текстом:'.'<br>'. $text;
    }*/

    protected function check() //проверка на голод
    
    {
        if ($this->hunger <= 2)
        {
            if ($this->hunger <= 0)
            { //если голод 0 - смерть
                $this->death = 'true';
                $this->say2('ласка померла :(');
                $this->sayGreenGuys('а ну в палату быстра');
            }
            else
            {

                $this->say('ГАЛЯ ХОЧУ ЖРАТЬ');
                $this->sayGreenGuys('в макдак быстраа');
            }
        }
    }

    public function run()
    {
        $this->speed = $speed + 56;
        $this->hunger = $this->hunger - 1; //здесь изменять значение голода
        $this->exp = $this->exp + 2;
        $this->check();
        $this->expCheck();
    }

    public function jump()
    {

        if ($this->speed >= 56)
        {
            $this->jump_length = 50;
            $this->exp = $this->exp + 8;
            $this->hunger = $this->hunger - 4; //здесь изменять значение голода для прыжка
            $this->check();

        }
        else
        {
            $this->jump_length = 25;
            $this->exp = $this->exp + 5;
        }

        $this->expCheck();
    }

    public function say($text)
    {
        echo 'ласка орет' . ' ' . $text . '<br>';
    }

}

$laska1 = new laska();
VarDumper::dump($laska1, 10, true);

echo "<br>";

$laska1->run();
VarDumper::dump($laska1, 10, true);

echo "<br>";

$laska1->jump();
VarDumper::dump($laska1, 10, true);

echo "<br>";

$laska1->say('УэЭэЭэЭээЭээЭЭэЭ');
VarDumper::dump($laska1, 10, true);

echo "<br>";

?>

