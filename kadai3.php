<?php
//1

$name ="原野佑香";
if($name == "原野佑香"){
  echo "私は原野佑香です";
} else {
  echo "原野佑香ではありません";
}

//2
$total = 0;
echo $total;
//=> 0 と表示される。
for ($i = 0; $i <= 10000; $i++) { //繰り返し条件
  $total += $i;
}

// $iが0から始まり、$iが１００以下の間繰り返し処理をおこなう。
for ($i = 0; $i <= 10000; $i++) {
  //$total += $i;

  $total = $total + $i; 
  // $total = 0 + 0;// 1週目
  // $total = 0 + 1;
  // $total = 1 + 2;
  // $total = 3 + 3;// 4週目
  // $total = 6 + 4;
  // $total = 10 + 5;
}
echo $total;

//3
$fruits = array("apple", "orange", "lemon", "cherry", "banana");

foreach($fruits as $fruit){
  echo "要素は" . $fruit;
}

//4 for文の始めの値を定義する /
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){ 
  // 5で割り切れたら{}内を実行する　echoのこと
  if($i % 5 == 0){ 
    echo $i;
  }
}





