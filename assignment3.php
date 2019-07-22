<?php 
$i=20;
while($i>9){
  echo "$i </br>";
  $i--;
}


echo "</br>";


$i=1;
while($i<=4){
  $j=$i+$i;
  echo "$i+$i=$j </br>";
  $i++;
}

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

$i=5;
while($i>=0){
  echo "$i </br>";
  $i--;
}


echo "</br>";

$k=1;

for($i=22;$i<23;$i++){
  for($j=1;$j<11;$j++){
    $k=$i*$j;
    echo "$i*$j=$k </br>";
    $k++;
  
}

}



echo "</br>";

$k=1;

for($i=40;$i<41;$i++){
  for($j=1;$j<11;$j++){
    $k=$i*$j;
    echo "$i*$j=$k </br>";
    $k++;
  
}

}

?>