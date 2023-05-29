<?php

function input(string $info): String {
    echo "$info : " ;
    $result = fgets(STDIN);
    return trim($result);
}