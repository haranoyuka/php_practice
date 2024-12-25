<?php
//1 引数に数値を2倍にして返す関数を作成してください
function two($max) { 
    return $max * 2;
}
// 関数を実行
echo two(200);
//=>400

//2 $a と $b　を足した結果を返す関数を作成してください
function add($a, $b) {
  return $a - $b;
}
echo add(2, 3);

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function kakeru($arr) { 

    $result = 1;
    foreach($arr as $a){
       //$result *= $a;
        $result = $result * $a; 
    }
    return $result;
}
echo kakeru(array(1, 3, 5 ,7, 9));
//=> 945 と表示される

//4
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
      // ここで配列の中の1番大きい値を探したい
      //もし$aが$max_numberより大きかったらmax_numberを$aと同じにする
      if($a > $max_number){
        $max_number = $a;
      }
    }  
    return $max_number;
}
echo max_array(array(10,20,30,15,25));
//=> 30 と表示される

//5
//strip_tags  指定した文字列の中にあるHTMLのタグやPHPタグを削除します
  $string = <p>"I love Rudy!"</p>;
echo strip_tags($string);
//=> I love Rudy! 

//array_push 一つ以上の要素を配列の最後に追加する
$array = arr(1, 2, 3, 4, 5, 6, 7, 8);
array_push($array, $h[9, 10]]）
return $result;
echo count($arr);
//=> 9,10と表示される

//array_merge 一つまたは複数の配列を結合する
$array = array(1, 2, 3, 4, 5, 6, 7, 8);
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
$array=array_merge ($array, $array1, $array2, $array3);
echo count($array);

//time 現在の時刻 mktim　Unix(1970年1月1日午前0時0分0秒から指定した時間まで何秒経ったか)表示するフオーマット
//ただし引数が不正な場合falseが返される
//変数 = mktime([int hour [, int minute [, int second
[, int month [, int day [, int year [,int is_dst]]]]]]]);
 //第1引数から順番に時間、分、秒、月、日、年
 $time = mktime(9);
 var_dump(date('Y年m月d日h時i分s秒', $time));
 print('<br/>');

 $time = time();
 echo time("2020","6","18","9","43","56") "2020年06月18日09時43分56秒"

//date 指定された日時を元に日付や時刻を文字列として返す関数である
// 指定した日付と時刻を取得
$Timestamp = time();
//timestamp…文字列にしたい日時をUNIXタイムスタンプで指定する。省略すると現在日時が使用される。
echo date("Y-m-d H:i:s", $currentTimestamp);
//出力例：y2024-m12-d18 h12:i30:s45
//timestamp…文字列にしたい日時をUNIXタイムスタンプで指定する。省略すると現在日時が使用される。