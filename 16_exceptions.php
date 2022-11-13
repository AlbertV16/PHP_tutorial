<?php

/* ----- Exceptions ----- */

/*
    PHP has an exception model similar to that of other programming languages. An exception can be thrown, and ccaught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.
*/

function inverse($x) {
    if(!$x) {
        throw new Exception('Division by zero');
    }
    return 1/$x;
}

//echo inverse(0);
// Can catch this error within a try, catch block

try{
    echo inverse(5);
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
    // finally will always run
    echo 'First Finally';
}

try{
    echo inverse(0);
} catch(Exception $e) {
    echo 'Caught Exception', $e->getMessage(), ' ';
} finally {
    // finally will always run
    echo 'Second Finally';
}

// try, catch block does not stop the code
echo 'Hello World';