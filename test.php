<?php

    require_once 'fingerprint.php';
    $fingerprint = new FingerPrint();
    echo ($fingerprint->generate_finger_print()."\n");
    if ($fingerprint->equals_finger_print($fingerprint->generate_finger_print(), $fingerprint->generate_finger_print())) {
        echo "ok";
    } else {
        echo "nop";
    }
?>