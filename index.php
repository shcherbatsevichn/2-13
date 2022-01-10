<?php error_reporting();
//В  массиве  А(N)  найти  два  наименьших  элемента  и  два  наибольших элемента. 
$A = [1, -7, -4, 9, 8, 23, 17, 22, -199, 7, 4, 3, -20, 6];
$counter = 2;

$a = search_maxs($A, $counter);
$b = search_mins($A, $counter);

echo("A(n):<br>");
print_r($A);
echo("<br>Result:<br>");
echo("Максимумы:<br>");
print_r($a);
echo("<br>Минимумы:<br>");
print_r($b);


function search_maxs($array, $counte){   
    $arr = $array;
    $result  = $array[0];
    $res = array();
    for($n = 0; $n < count($arr); $n++){
            if($arr[$n] > $result){
                $result = $arr[$n];
            }
    }  
    $res = array_merge($res, [$result]);
    $arrr = array();
    for($n = 0; $n < count($arr); $n++){
        if($arr[$n] == $result){
            $arr[$n] = null;
        }
        $arrr[$n] = $arr[$n];
    }  
    if($counte == 1 ){ //условие выхода из функции
        return $res;
        exit;
    }
    $counte--; // счётчик количества максимумов. 
    return array_merge($res, search_maxs($arrr, $counte)); 
}

function search_mins($array, $counte){   
    $arr = $array;
    $result  = $array[0];
    $res = array();
    for($n = 0; $n < count($arr); $n++){
            if($arr[$n] < $result){
                $result = $arr[$n];
            }
    }  
    $res = array_merge($res, [$result]);
    $arrr = array();
    for($n = 0; $n < count($arr); $n++){
        if($arr[$n] == $result){
            $arr[$n] *= (-1);
        }
        $arrr[$n] = $arr[$n];
    }  
    if($counte == 1 ){ //условие выхода из функции
        return $res;
        exit;
    }
    $counte--; // счётчик количества максимумов. 
    return array_merge($res, search_mins($arrr, $counte)); 
}