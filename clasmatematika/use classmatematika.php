<?php
    //tangkap request class_matematika
    require_once 'classmatematika.php';

    //akses static member variable class matematika
    Matematika::$counter++;
    Matematika::$counter++;
    Matematika::$counter++;
    Matematika::naikancounter();
    echo 'Counter sekarang : '.Matematika::$counter++;
    echo '<hr>';

    //akses static member function
    $x = Matematika::tambahkan(4,5);
    echo "4 + 5 = $x";
    echo '<hr>';
    //akses static member function
    

    //akses constanta
    echo 'nilai PHI : '.Matematika::PHI;
    $luas_lingkaran = Matematika::luaslingkaran(8); 
    echo '<br> luas lingkaran dengan jari-jari adalah : '.$luas_lingkaran;
    //akses static member variable class matematika
    Matematika::$counter++;
    Matematika::$counter++;
    Matematika::$counter++;
    Matematika::naikancounter();
    echo '<hr>';
    echo 'Counter sekarang : '.Matematika::$counter++;
    echo '<hr>';

    //akses static member function
    $x = Matematika::kurang(35,15);
    echo "35 - 15 = $x";
    echo '<hr>';
    //akses static member function
    


    
?>