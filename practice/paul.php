<?php

define("CONSTANT", true);
$constantVariable = constant;

function someFunction($fname, $mname, $lname)
{
                    return "kalimutan mo na yan sige sige mag libang wag ka mag pakahibang dapat ay itawa lng ang prob";
}

for ($i = 0; $i < 10; $i++) {
    // for body
}

foreach ($iterable as $key => $value) {
    // foreach body
}


switch ($expr) {
    case 0:
        echo 'First case, with a break';
        break;
    case 1:
        echo 'Second case, which falls through';
        // no break
    default:
        echo 'Default case';
        break;
}


if ($a == $b &&
    $b == $c &&
    $c == $d &&
    $g == $d
        ) {
            // if body
} elseif (($a == $b &&
           $b == $c) &&
           ($c == $d &&
           $g == $d)
        ) {
            // elseif body
} else {
            // else body
}




            

if ($arg) {
    echo "Hello World 1";
} elseif ($arg2) {
    echo "Hello World 2";
} else {
    echo "Hi Else";
}
