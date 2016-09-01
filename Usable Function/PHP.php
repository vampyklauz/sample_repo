
<?php
//SORT MULTI-DIMENSIONAL ARRAY BY VALUE "STRING"
// value = key for sorting
usort($myArray, function ($a, $b) {
    return strcasecmp(trim($a['value']), trim($b['value'])); //compare two strings ignoring case
});

//SORT MULTI-DIMENSIONAL ARRAY BY VALUE "INTIGER"
// value = key for sorting
usort($myArray, function($a, $b) {
    return $a['value'] - $b['value'];
});

// $answer = 3:'test';
// $first = 3 and $next = test;
list( $first, $next ) = explode( '|', $answer );