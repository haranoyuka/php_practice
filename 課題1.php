<?php
//1

// 変数　$a に 3 を代入
// 変数  $b　に 7 を代入
$a = 3;
$a = 5;
$b = 7;
// 変数 $a を出力
echo $a;
// => 3 と表示される
// 変数 $b を出力
echo $b;
// => 7 と表示される

echo $a + $b;
//=> 10 が表示される

//2


// 変数 $array_month に 配列 [1月, 2月, 3月, 4月, 5月, 6月, 7月, 8月, 9月, 10月, 11月, 12月] を代入する
$array_month = ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"];
// $array_month から 8月 を取り出して表示する
echo $array_month[7];
// => 8月 と表示される

//3

// . 変数　$hello に "Hello, " を代入 
// . 変数　$name に "haranoyuka" を代入
// . 変数　$world に "s World!" を代入
$hello = "Hello, ";
$name = "haranoyuka";
$world = "s World!";
echo $hello . $name . $world;
//=> "Hello, haranoyuka "s World!" が表示される

/*

//4

*/
$tech_boost = 'tech ';
$tech_boost .= 'boost';
echo $tech_boost;
//=> tech boostと表示される


//5

$calendar2024 = [
    "January" => "1月",
    "February" => "2月",
    "March" => "3月",
    "April" => "4月",
    "May" => "5月",
    "June" =>"6月", 
    "July" => "7月",
    "August" => "8月",
    "September" => "9月",
    "October" => "10月",
    "November" => "11月",
    "December" => "12月",
];
  
  // 12月を表示する
  echo $calendar2024["December"];
  