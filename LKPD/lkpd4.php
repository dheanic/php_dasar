<?php
if(isset($_POST['submit'])){
    //pengisian input ke variable
    $waktu = $_POST['times'];
//decision
if($waktu >= 3600){
    // floor untuk membulatkan kebawah, veil membulatkan keatas, round membulatkan keatas dan kebawah
    $jam = floor($waktu / 3600);
    $waktu -= ($jam * 3600);
    $hasil .= $jam . " jam ";
    // operator += bersifat menambah, kalau hanya = bersifat menimpa
}
else if($waktu >= 60){
    $menit = floor($waktu / 60);
    $waktu -= ($menit * 60);
    $hasil .= $menit . " menit ";
}
    $detik = $waktu;
    $hasil .= $detik . " detik "; 

echo $hasil;
}
?>