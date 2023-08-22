<?php
if(isset($_POST['submit'])){
    $jam = $_POST['hours'];
    $menit = $_POST['minutes'];
    $detik = $_POST['seconds'];

$jam *= 3600;
$menit *= 60;
$total = $jam + $menit + $detik;
echo "Total detik : " . $total;
}

?>

</html>