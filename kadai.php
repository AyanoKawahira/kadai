<?php
//課題1
function doubleInt(int $int){
    return $int * 2;
}
echo doubleInt(35);
echo PHP_EOL;
?>


<?php
//課題2
function add($a,$b){
    return $a + $b;
}
echo add(9,24);
echo PHP_EOL;
?>


<?php
//課題3
function f3($arr){
    $result = 1;
    foreach($arr as $a){
        $result = $result * $a;
    }
    return $result;
}
echo f3(array(1,3,5,7,9));
echo PHP_EOL;
?>


<?php
//課題4
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number < $a){
            $max_number = $a;
        }
    //どうしたらいいかわからない・・・・
    }

    return $max_number;
}
echo max_array(array(5,3,11,9));
echo PHP_EOL;
?>


<?php
//課題5
//strip_tags
$str = "<h1>strip_tagsの練習</h1>"
    ."<p>HTMLタグを取り除く</p>";
echo strip_tags($str) ."\n";


//array_push
$fruits = ['apple', 'strawberry'];
array_push($fruits, 'orange', 'grape');
print_r($fruits);


//array_merge
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);


//time
echo time();
echo PHP_EOL;


//mktime
//誕生日のタイムスタンプを取得する
$timestamp = mktime(0,0,0,1,27,1994);
echo $timestamp;
echo PHP_EOL;


//date
date_default_timezone_set('Asia/Tokyo');
echo date('Y年m月d日 H時i分s秒');
echo PHP_EOL;
?>