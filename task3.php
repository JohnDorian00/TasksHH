<?php
    $arrayInfo = [
        'name' => 'Ivan',
        'surname' => 'Ivanov',
        'address' => 'Petrovsk',
        'telephone' => '8 (985) 222-33-44'
    ];

    foreach ($arrayInfo as $key => $value) {
        echo 'Key is <'.$key.'>, value is <'.$value.">\n";
    }