<?php 

echo "Hoeveel vrienden zal ik vragen om hun droom?" . "\n";
$x = readline("");
$ary = array();
$aantal = 0;

for($i = 0; $i < $x; $i++){
    echo "Wat is jouw naam?" . "\n";
    $na = readline("");
    echo "Hoeveel dromen ga je opgeven?" . "\n";
    $hvl = readline("");
    $aantal = $hvl + $aantal;

    for($j = 0; $j < $hvl; $j++){
        echo "Wat is jouw droom?" . "\n";
        $dro = readline("");
        $ary[] = array($na, $dro);
    }
}

foreach($ary as $val){
    echo $val[0] . " heeft dit als droom: " . $val[1] . "\n";
}