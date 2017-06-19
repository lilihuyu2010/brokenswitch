<?php


function rabbit1($n)
{
	$arr[0] = 1;
	$arr[1] = 1;
	if ($n == 1) {
		return 1;
	}
	for ($i = 2;$i<=$n;$i++) {
		$arr[$i] = $arr[$i-1] + $arr[$i - 2];
	}
	return $arr[$n];

}


function rabbit2($n)
{
	if ($n == 1) {
		return 1;
	}
	if ($n == 2) {
		return 2;
	}
	return rabbit2($n-1) + rabbit2($n - 2);
}

echo rabbit2(3);die;



$len = 20;

for ($i=0;$i<$len;$i++) {
	for ($j=0;$j<=$i;$j++) {
		if ($j == 0 || $i == $j) {
			$arr[$i][$j] = 1;
		} else {
			$arr[$i][$j] = $arr[$i-1][$j] + $arr[$i-1][$j-1];
		}
		echo $arr[$i][$j] . "\t";
	}
	echo "<br>";
}
die;




function kicktest($monkeys,$m,$current=0)
{
	$count = count($monkeys);
	if ($count == 1) {
		echo $monkeys[0] . "是猴王了" . "<hr>";
		return;
	}
	$num = 1;
	while ($num++ < $m) {
		$current ++;
		$current = $current%$count;
	}
	echo $monkeys[$current].'被踢出去了'. "<hr>";
	array_splice($monkeys, $current,1);
	kicktest($monkeys,$m,$current);
}
$a = range(1,10);

kicktest($a,3);die;



function kickMonkey ($array,$m,$current = 0) {
    $s = 0;
    for ($i=2; $i<=$n; $i++) {
        $s = ($s+$m)%$i;
    }
    $win = $s+1;
    return $win;
}

//var_dump(kickMonkey(7,3));

function getking($n,$m){
	$array=range(1,$n);
	$now=0;//初始化$now，为定位标志，也就是从它开始数
	$nn=$n;//不破坏初始量
	while($nn>1){
		$now=($now+$m)%$nn;//计算该第几个猴子出局了，因为是圈，取余就够了
		if(!$now){$now=$nn;}//如果正好整除那么这个猴子是最后一个（不是第0个）
		array_splice($array,$now-1,1);//去掉这个猴子
		$nn--;$now--;//总数减少一个，标志前移一个
		echo $now . '-----' . $nn . "<hr>";
	}
	echo $array[0];
}

//$now = 0 $nn = 7
//$now = 2 $nn = 6
//$now = 4 $nn = 5



// 1 2 3 4 5 6 7
// 1 2   4 5 6 7
// 1 2   4 5   7
// 1     4 5   7
// 1     4 5   
// 1     4 
//       4

getking(7,3);


// function getking($n,$m)
// {
// 	$array = range(1,$n);
// 	$nn = $n;
// 	$now = 0;
// 	while($nn>1){
// 		$now = ($now+$m)%$n;
// 		if(!$now) {
// 			$now = $nn;
// 		}
// 	}
// }