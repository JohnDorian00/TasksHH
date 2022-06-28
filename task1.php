<?php
    $arrayNumber = [
        [11,0,1,2,3,4,5,6,7,8,9,10]
    ];


    sort($arrayNumber[0]);
    for ( $i = 0; $i <= count($arrayNumber[0]) - 1; $i++)
    {
        echo $arrayNumber[0][$i]."\n";
    }