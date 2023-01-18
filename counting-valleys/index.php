<?php

function countingValleys($steps, $path)
{

    $sl = 0;
    $v = 0;

    for ($i = 0; $i < $steps; $i++) {

        if ($path[$i] == "U") {
            $sl++;
        } else {

            if ($sl == 0) {
                $sl--;
                $v++;
            } else {
                $sl--;
            }
        }
    }
    return $v;
}
