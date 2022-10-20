<?php
/* ----- Operators ----- */

/*
    < Less than
    > Greater than
    <= Less than or equal to
    >= Greater than or equal to
    == Equal to
    === Identical to
    != Not equal to
    !== Not identical to
*/

/* ----- If Statements ----- */

/*
** If Statement Syntax
if (condition) {
    // code to be executed if condition is true
}
*/

$age = 17;

// if ($age >= 18){
//     echo 'You are old enough to vote';
// } else {
//     echo 'Sorry, you are not old enough to vote';
// }

// $t = date("H");

// if ($t < 12) {
//     echo 'Good Morning';
// } elseif ($t < 17){
//     echo 'Good Afternoon';
// } else {
//     echo 'Good Evening';
// }

$posts = [];

// Ways to check if var is empty
// empty(var)

// if (!empty($posts)) {
//     echo $posts[0];
// } else {
//     echo 'No Posts';
// }

// Turnary Operators
// How to write above code in 1 line
// echo !empty($posts) ? $posts[0] : 'No Posts';

// Commonly used to set variables
// Needs to else statement
// $firstPost = !empty($posts) ? $posts[0] : 'No Posts';
// $firstPost = !empty($posts) ? $posts[0] : null;

// Coalescing Operator ??
// $firstPost = $posts[0] ?? null;

// echo $firstPost;

/* ---- Switches ----- */
// Cleaner look than a bunch of elif statements

$favcolor = 'red';

switch($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'blue':
        echo 'Your favorite color is blue';
        break;
    case 'green':
        echo 'Your favorite color is green';
        break;
    default:
        echo 'Your favorite color is not red, blue, or green';
}

?>