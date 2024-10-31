<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h3>----------------PHP function---------------</h3>

    <?php 
     function tampilkan_nama(){
        echo "Nama saya malas ngoding";
     }
     tampilkan_nama();
    ?>

<h3>----------------String function--------------</h3>
    <?php 
    //  String Function
$nama = "muhammad raden iqbal  hafidz Fauzi";
echo '<br/>';
echo strtoupper($nama);
echo '<br/>';
echo strtoupper($nama);
echo '<br/>';
echo lcfirst($nama);
echo '<br/>';
echo strtolower($nama);
    ?>

<h3>----------------function :: Void---------------</h3>
    <?php 
// fungsi void
function salam($nama){
   echo"<h2>Assalamu'alaikum,".strtoupper($nama)."</h2>";
}
salam("ali");
salam("fadli");
salam("fauzan");
    ?>


<h3>----------function :: Return value---------------</h3>
    <?php 
    // fungdi mengembalikan nilai berupa variable
function jumlah($a , $b ){
    return $a + $b;
}

echo '$a + $b = '.jumlah(2,8);
    ?>

<h3>----------------function ::Void - tanpa argumen---------------</h3>
<?php 
// Fungsi : Tanpa argumen
// membuat fungsi
function kenalandong(){
    echo "Assalamu'alaikum, ";
    echo "Perkenalan,nama saya Bedu<br/>";
    echo "Senang berkenalan dengan anda<br/> ";
 }
 // memanggil fungsi yang sudah di buat
 kenalandong();
 
 echo "<hr/>";
 
 // memanggil lagi
 kenalandong();
?>

<h3>----------------function :: Void - dengan argumen---------------</h3>
<?php 
// Function define By User :: void
// Fungsi : dengan argumen
 
// membuat fungsi
function kenalin($nama,$salam){
    echo $salam,",";
    echo " kenalin,nama saya ".$nama."<br/>";
    echo " Senang berkenalan dengan anda <br/>";
 }
 
 // memanggil fungsi yang sudah dibuat
 kenalin("Usro","Hai");
 
 echo "<hr/>";
 
 $saya = "Bedu";
 $ucapansalam = "Selamat Pagi";
 
 // memnggil lagi
 kenalin($saya, $ucapansalam);
?>

<h3>----------------function :: Void - dengan nilai default---------------</h3>
<?php 
// Function define By User :: void
// Fungsi : Dengan nilai default

// membuat fungsi 
function panggil($nama,$salam = "Assalamualaikum"){
    echo $salam,",";
    echo " panggil,nama saya ".$nama."<br/>";
    echo " Senang berkenalan dengan anda <br/>";
 }
 
 // memanggil fungsi yang sudah dibuat
 panggil("Jarwo", "Hi");
 
 echo "<hr/>";
 
 $saya = "Bambang";
 $ucapansalam = "Selamat Pagi";
 // memanggil lagi tanpa mengisi parameter salam
 panggil($saya);
?>

<h3>----------------function :: return value - mengembalikan nilai berupa variable---------------</h3>
<?php 
// Function define by User : return value
// Fungsi : mengembalikan nilai berupa variable

// membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
 }
 
 echo "Umur saya adalah ". hitungUmur(2003, 2022)."Tahun";
?>

<?php 
// Function define By User :: void
function berumur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
 }
 
 function perkenalan($nama, $salam = "Assalamualaikum"){
    echo $salam.",";
    echo "Perkenalan, nama saya ".$nama. "<br/>";
    // memagngil fungsi perkenalan
    echo "Saya berusia ". berumur(1994, 2015 ) , "tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
 }
 
 // memanggil fungsi perkenalan 
 perkenalan("Ardianta");

 echo "<hr/>";
 // Function define By User :: void
function faktorial($angka){
    if ($angka < 2){
       return 1;
    } else {
       // memanggil dirinya sendiri
       return ($angka * faktorial ($angka-1));
    }
 }
 
 // memanggil fungsi
 echo "faktorial 5 adalah". faktorial(5);
?>

<h3>----------------variable Local function ---------------</h3>
<?php 
// Variable local Function
// Variable : yang dikenal hanya dalam fungsi saja
function pangkatgenap($a){
    $a = $a * $a;
 }
 $a = 20;
 echo 'Sebelum Nilai $a : '.$a;
 pangkatgenap($a);
 echo '<br/> Sesudah Nilai $a : '.$a;
?>

<h3>----------------variable global function ---------------</h3>
<?php 
// Variable global
// Variable : yang dikenal oleh seluruh program
function pangkatDua ($a){
    global $a;
    $a = $a * $a;
 }
 
 $a = 20;
 echo 'Sebelum Nilai $a : '.$a;
 pangkatDua($a);
 echo '<br/>Sesudah Nilai $a :'.$a;
?>


</body>
</html>