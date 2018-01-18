<?php
    require 'fonctions.php';
    start_page('Calculs');

    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op = $_POST['op'];

    $action = $_POST['action'];

    if("submit" == $action) {
        if ('*' == $op)
            echo "$op1 * $op2 = " . $op1 * $op2;
        else if ('/' == $op)
            echo "$op1 / $op2 = " . $op1 / $op2;
        else if ('+' == $op)
            echo "$op1 + $op2 = " . $op1 + $op2;
        else
            echo "$op1 - $op2 = " . $op1 - $op2;
    }

    end_page();
?>