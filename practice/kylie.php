<?php
require_once("define.php");
echo "TEST FROM KYLIE new";
echo "TEST FROM KYLIE";
echo "TEST FROM KYLIE from invitation";
echo "TEST FROM KYLIE from invitation";


$constantVariable = constant;
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


for ($i = 0; $i < 10; $i++) {
// for body
}

foreach ($iterable as $key => $value) {
// foreach body
}
