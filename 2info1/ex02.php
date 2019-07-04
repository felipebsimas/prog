<?php

    print "Digite o cateto A";
    $catetoA = (int) fgets(STDIN);

    print "Digite o cateto B";
    $catetoB = (int) fgets(STDIN);


    $expA = pow($catetoA, 2);
    $expB = pow($catetoB, 2);

    $hipotenusa = sqrt($expA + $expB);

    print "O valor da hipotenusa é $hipotenusa";

