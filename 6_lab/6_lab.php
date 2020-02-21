<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
include 'VarDumper.php';
class snake
{
    public $length = '---------------------------';
    public $move = '>';

    public function test()
    {

        $z = $this->length;
        $arr = str_split($z);
        
        foreach ($arr as $key => $x)
        {
            $arr[$key] = '*';
            $key++;
            $arr[$key] = '>';

            echo implode($arr) . "<br>";
        }
    }

    
    

    
}

//}


$snake = new snake();
$snake->test();
?>


</body>
</html>






































