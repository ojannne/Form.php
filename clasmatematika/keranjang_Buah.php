<?php 
    // tangkap request class_fruit
    require_once 'class_fruit.php';

    // create instan objek fruit : $aplle and $banana 
    $apple = new Fruit();
    $banana = new Fruit();

    // call member class
    $apple->get_name('Apple');
    $apple->set_color('Red');
    $banana->get_name('Banana');
    $banana->set_color('Yellow');

    echo 'Nama Buah '.$apple->get_name().' Warnanya '.$apple->get_color();
    echo '<br/>Nama Buah '.$banana->get_name().' Warnanya '.$banana->get_color();
?>