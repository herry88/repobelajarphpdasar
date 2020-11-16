<?php 
//kata kunci 
$angka_1 = $_POST['angka_1'];
$angka_2 = $_POST['angka_2'];
$operasi = $_POST['operasi'];

//jumlah
if($operasi == "jumlah"){
    $a = $angka_1 + $angka_2;
    echo $a;
} 
//kurang
elseif($operasi == "kurang"){
    $b = $angka_1 - $angka_2;
    echo $b;
}
//bagi
elseif($operasi == "bagi"){
    $c = $angka_1 / $angka_2;
    echo $c;
}
//kali
elseif($operasi == "kali"){
    $d = $angka_1 * $angka_2;
    echo $d;
}
//tidak memilih apa apa 
else{
    echo "Anda Belum menentukan pilihan";
}
