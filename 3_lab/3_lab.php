<?php
//1
function getPlus10($num1)
{
    $sum = $num1 + 10;
    print "Sum : $sum";
} 
getPlus10 (30);
echo '
';
echo '<br>';
//2
function getPlus11($num1)
{
    $sum = $num1 + 10;
    return  $sum;   
} 
$return_value = getPlus11(30);
print "Sum2 : $return_value";
echo '
';
echo '<br>';
//3
function pythagoras($in1, $in2)
{
    $in1 = pow($in1, 2);
    $in2 = pow($in2, 2);
    return (sqrt($in1 + $in2));
}
echo pythagoras(10, 20);
echo '
';
echo '<br>';
//4
function ipoteka ($i, $p)
{
    $sum = $p * 5;
    $sum2 = $i * $sum;
    $sum3 = $sum2 + $sum;
    $sum4 = $sum3/60;
    return ($sum4);
}
$return_value = ipoteka (2000000, 0.1);
echo "что не так? : $return_value";
echo '
';
echo '<br>';
//5
function col($i,$p,$o)
{
     return $numargs = func_num_args();
}
echo col(12, 6, 123);
echo '<br>';
//6 среднее число зависимо от количество данных!
function pup(...$nums)
{
    $sum = 0;
     foreach ($nums as $n) 
    {
       $sum = $sum + $n;
    }
    $sum1 = $sum/func_num_args();
    return $sum1;
}
echo pup(13, 24, 10);
echo '<br>';
//7
function op($num1, $num2, $operator)
{
    eval("\$str .=\"$num1 \"$operator \"$num2 \";");
    echo $str;
}
echo op(2,2,'+');
echo '<br>';
/*==================================================*/
function add($add1, $add2)
{
    $sum = $add1 + $add2;
    return $sum;
}
echo add (1,2);
function sub($sub1, $sub2)
{
    $raz = $sub1 - $sub2;
    return $raz;
}
echo sub(3,1);
function op2($num1, $num2)
{
    $sum1 = $num1 + $num2;
    return $sum1;   
}
echo call_user_func('op2', 2,10);
?>