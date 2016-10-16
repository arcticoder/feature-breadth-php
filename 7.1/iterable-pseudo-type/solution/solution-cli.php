<?php

function iterate(iterable $iter)
{
    foreach ($iter as $val) {
        echo "val == $val\n";
    }
}

iterate(array(1,2,3));
iterate("string");
