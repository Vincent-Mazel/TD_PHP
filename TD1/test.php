<?php
    require 'fonctions.php';

    start_page('Test');

    echo '<hr/><br/><strong>Test</T></strong><br/><hr/></br>';

    $jour = date('1 F d, Y');
    echo $jour . '</br>';

    $jourString = date('F d, Y, h:i a',strtotime('2001-03-12,22:16'));
    echo $jourString;

    end_page();
?>