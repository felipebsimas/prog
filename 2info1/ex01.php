<?php

    print "Digite a temperatura em Fahrenheit" ;
    $temperatura = (int) fgets(STDIN);

    $tempgraus = ($temperatura - 32) * 5/9;

    print "A temperatura em Celsius é $tempgraus";

