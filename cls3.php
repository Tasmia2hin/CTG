<?php 

//while loop
$i=0;
while($i<=10){
  $j=$i+$i;
  echo "$i+$i=$j </br>";
  $i++;
}


//Do while loop
$s=0;
do{
  echo "hi";
}

while($s !=0);

echo "</br>";


//switch

$j="adult";
switch ($j){
  case 'parents':
  echo "parents enter";
  break;

  case 'baby':
  echo "baby enter";
  break;

  case 'adult':
  echo "adult enter";
  break;

  defult:
  echo "nobody";
  break;
}

echo "</br>";



//nested loop


$k=1;

for($i=0;$i<2;$i++){
  for($j=1;$j<11;$j++){
    $k=$i*$j;
    echo "$i*$j=$k </br>";
    $k++;
  
}

}

echo "</br>";


$k=1;

for($i=5;$i>0;$i--){
  for($j=0;$j<11;$j++){
    $k=$i*$j;
    echo "$i*$j=$k </br>";
    $k++;
  
}

}

echo "</br>";


//recursion

function greet($n){
  echo "vaa vaaa </br>";
  if($n !=0){
    $n--;
    greet($n);
  }
}
greet(5);

echo "</br>";



function greets($n){
  if($n <=0){
  }
    else{
      echo "vaa </br>";
      $n--;
    greets($n);

    }
}
greets(5);

echo "</br>";



function greetes($n){
  if($n >=2){
  }
    else{
     $k=2;
     $l=3;
     $m=4;
     $o=5;

     $j= $n+$k+$l+$m+$o;
      echo "$n+$k+$l+$m+$o=$j </br>";
      $n++;
    greetes($n);

    }
}
greetes(1);




echo "</br>";
 ?>