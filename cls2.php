
<?php
$st = "hello";


echo strlen($st);
//use forstring counting;

echo "</br>";

$str2 = str_replace("hello","tb", "$st");

echo $str2;

echo "</br>";

$str3 = "janina";
echo md5($str3);


echo "</br>";

$s ="we are going to jania";
$arr = explode("i", $s);
print_r($arr);


echo "</br>";


$arry = array("janina","na","na");
$ar = implode(";",$arry);
echo $ar;
echo "</br>";

$ary = "tasmia, ahmed,";
$arry = explode(",", $ary);
print_r($arry);
echo "</br>";

$ry = array("coders","trust","sucess","story");
$r = implode(" ",$ry);
echo $ar;
echo "</br>";

$name = "tasmia,alam";
$ary = explode(",", $name);
echo $nm= implode(" ", $ary);
echo "</br>";


$a=2;
echo $a**10;


echo "</br>";

$a=2;
$b=$a+1;
echo $b;

echo "</br>";

$a=2;
$b -=$a+1;
echo $b;

echo "</br>";

$a=2;

$a++;
echo $a;

echo "</br>";

$a=2;

$b=$a++;

$a=$a+1;
echo $a;

echo "</br>";


print_r($_SERVER); //requrement show kore
echo $_SERVER["REMOTE_ADDR"];

echo "</br>";

$a=1;
if($a==1){
	echo"Tasmia";
}
else{
	echo"Alam";

}

echo "</br>";

$a=1;
$b="1";
if($a==$b){
	echo"Tasmia";
}
else{
	echo"Alam";

}

echo "</br>";

$a=1;
$b="1";
if($a===$b){
	echo"Tasmia Alam";
}
else{
	echo"Tasmia Ahmad";

}

echo "</br>";

$a=1;
$b="1";
if($a===$b){
	echo"Tasmia Alam";
}
else{
	echo"Tasmia Ahmad";

}

echo "</br>";


$a=1;
$b="1";
$c=5;
$d=7;
if($a===$b){
	echo"Tasmia Alam";
}
else if($c==2){
	echo"Tasmia Ahmad";

}

else if($d==7){
	echo"Tasmia";

}

else{
	echo"Nothing";

}

echo "</br>";


$a=1;
$b="1";
$c=5;
$d=7;
if($a===1){
	echo"Tasmia Alam";
}
if($c==5){
	echo"Tasmia Ahmad";

}

if($d==7){
	echo"Tasmia";

}

else{
	echo"Nothing";

}

echo "</br>";


$a=1;
$b=1;
$c=5;
$d=10;
if($a==$b && $c==50){
	echo"Tasmia Alam";
}

else{
	echo"Nothing";

}

echo "</br>";

$a=1;
$b=1;
$c=5;
$d=10;
if($a==$b || $c==50){
	echo"Tasmia Alam";
}

echo "</br>";


$a=1;
$b=1;
$c=5;
$d=10;
if($a==$b && $c !==50){
	echo"Tasmia Ahmed";
}

else{
	echo"Nothing";

}

echo "</br>";

$a=10;
$b=2;
$c=50;
$d=00;
if($a>$b && $a>$c && $a>$d){
	echo $a;
}

if($b>$a && $b>$c && $b>$d){
	echo $b;

}
if($c>$a && $c>$b && $c>$d){
	echo $c;

}
if($d>$a && $d>$b && $d>$c){
	echo $d;

}

else {
	echo "nothing";
	}
echo "</br>";


$a=10;
$b=$a%2;
echo $b;

echo "</br>";


$f=3;
if($f%3==0){
	echo "even";
}
echo "</br>";


$f=10;
if($f%3==0){
	echo "even";
}
else {
	echo "nothing";
	}

echo "</br>";


$f=10;
if($f%2==0){
	echo "even";
}
else {
	echo "nothing";
	}

echo "</br>";

//take 3 name,find the shoetest name,if the 


$name1 = "Tasmia";
$name2 = "Alam";

$result =fun($name1, $name2 , "2hin");
echo $result;
	function fun($ver1, $ver2, $ver3){
		$sum = $ver1." ".$ver2." ".$ver3;
		return $sum;

}

echo "</br>";



for($i=0;$i<5;$i++){
echo "$i pls stop cls <br>";
}

echo "</br>";


for($i=0;$i<101;$i++){
$v=$i+$i;
echo "$i+$i=$v <br>";

}


?>
