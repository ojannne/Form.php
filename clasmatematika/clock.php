<?php 
    // tangkap request class_fruit
    require_once 'class_clock.php';

    // create instan objek fruit : $aplle and $banana 
    $jamtangan = new clock();
    $jamdinding = new clock();

    // call member class
    $jamtangan->get_name('jamtangan');
    $jamtangan->set_merk('eiger');
    $jamdinding->get_name('jamdinding');
    $jamdinding->set_merk('seiko');

    echo 'jam tangan '.$jamtangan->get_name().' mereknya '.$jamtangan->get_merk();
    echo '<br/>jam dinding '.$jamdinding->get_name().' mereknya '.$jamdinding->get_merk();
?>