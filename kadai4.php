<?php
//1 引数に数値を2倍にして返す関数を作成してください
function add($max) {
    

    return $max * 2;
}

// 関数を実行
echo add(200);

//2 $a と $b　を足した結果を返す関数を作成してください
function add($a, $b) {

return $a + $b;
}

echo add(2 + 3);

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function $array($arr) {    

    $result = 1;
    foreach($arr as $a){
        $result *= $a;
    }

    return $res;
}

echo array($arr);
//=> 945 と表示される

//4
function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[10,9,8,7,6,5,4,3,2,1];
    foreach($arr as $a){
      // ここで配列の中の1番大きい値を探したい
    }
  
    return $max_number;
}

echo count($arr)
//=> 10 と表示される


//5
//strip_tags 指定した文字列の中にあるHTMLのタグやPHPタグを削除します
  $string = "I love Rudy!";
$string = strip_tags("love", "Rudy!", $string);

echo $string;
//=> I 

//array_push 一つ以上の要素を配列の最後に追加する
$array = arr(1, 2, 3, 4, 5, 6, 7, 8);
array_push($array, $h[9, 10]]）

return $result;

echo count($arr);
//=> 9,10と表示される

//array_merge 一つまたは複数の配列を結合する
$array = arr(1, 2, 3, 4, 5, 6, 7, 8);
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
array=array_merge ( $array1, $array2, $array3);

return $result;

echo count($arr);

//time 現在の時刻 mktime 指定された時刻をUnixのタイムスタンプとして取得する

//Y：年（4桁）
//y：年（2桁）
//m：月（2桁、01から12）
//n：月（1から12）
//d：日（2桁、01から31）
//j：日（1から31）
//H：時（24時間制、00から23）
//h：時（12時間制、01から12）
//i：分（00から59）
//s：秒（00から59）
//A：午前または午後（大文字、AMまたはPM）
//a：午前または午後（小文字、amまたはpm）

int time()
//引数なし

//変数 = mktime([int hour[,
 int second [,int month [,int day [,int year [,int is_dst]]]]);
 //第1引数から順番に時間、分、秒、月、日、年、サマータイムフラグが設定できる
 //is_dstはサマータイムかどうかのフラグを設定可能です
 //サマータイムの場合は1、違うなら0、不明の場合は-1を設定できます
 $time = mktime(9);
 var_dump(date('Y年m月d日h時i分s秒', $time));
 print('<br/>');

 echo string(32) "2020年06月18日09時43分56秒"

//date 指定された日時を元に日付や時刻を文字列として返す関数である
// 現在の日付と時刻を取得
$currentTimestamp = time();
// 基本的なフォーマットで日付と時刻を表示
echo date("Y-m-d H:i:s", $currentTimestamp); 

