<?php

/* ----- File Handling -----*/
/* File handling is the ability to read and write files on the server.
PHP has build in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if(file_exists($file)) {
    // read the file and its bytes
    // echo readfile($file);

    // pointer var
    // fopen('file', 'mode (read, write)')
    // Create handle, get contents, do what you want, close file
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Brad' . PHP_EOL . 'Joe' . PHP_EOL . 'Sara';
    fwrite($handle, $contents);
    fclose($handle);
}