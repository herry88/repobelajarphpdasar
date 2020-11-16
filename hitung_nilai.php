<?php 
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

//value 
$na = (0.4 * $nilai_uts) + (0.6 * $nilai_uas);
// <p>$na 4% * UTS + 6% * UAS</p><br>
//         <p>Nilai 80 >= 100 -> A</p><br>
//         <p>Nilai 60 - 70 -> B</p><br>
//         <p>Nilai 40 - 50 -> C</p><br>
//         <p>nilai 40 -> D</p><br>
//         <p>E</p>

if($na >= 80){
    $indeks = 'A';
} 
else if($na >= 60){
    $indeks = 'B';
}
elseif($na >= 50){
    $indeks = 'C';
}
elseif($na >= 40){
    $indeks = 'D';
}
else{
    echo "E";
}

echo    "$nilai_uts <br>";
echo    "$nilai_uas <br>";
echo "$na<br>";
echo "$indeks";

?>
