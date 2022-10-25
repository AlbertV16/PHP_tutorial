<?php

    $string = 'Hello World';

    // Get length of a string
    echo strlen($string);

    // Find the position of the first occurrence of a substring in a string
    echo strpos($string, 'o');

    // Find the position of the last occurrence of a substring in a string
    echo strrpos($string, 'o');

    // Reverse a string
    echo strrev($string);

    // Convert all characters to lowercase
    echo strtolower($string);

    // Convert all chars to uppercase
    echo strtoupper($string);

    // Uppercase the first char of each word
    echo ucwords($string);

    // String replace
    echo str_replace('World', 'Everyone', $string);

    // Return portion of a string specified by the offset and length
    echo substr($string, 0, 5);
    echo substr($string, 5);

    // Starts with
    if (str_starts_with($string, 'Hello')) {
        echo 'YES';
    }

    // Ends with
    if (str_ends_with($string, 'ld')) {
        echo 'YES';
    }

    // Can run html in strings
    // Want to prevent this for security
    // Use htmlspecialchars() to see if string has html code
    // htmlentities() does a similar effect
    $string2 = '<h1>Hello</h1>';
    $string3 = '<script>alert(1)</script>';
    echo htmlspecialchars($string2);
    echo htmlspecialchars($string3);

    // Formatted strings
    printf('%s likes to %s', 'Brad', 'code');
    printf('1 + 1 = %d', 1 + 1);
?>