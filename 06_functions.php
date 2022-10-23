<?php
    // $y = 12;

    // Argument - The thing going into a functions
    // Parameter - The variable being passed into the function
    function registerUser($email) {
        // global $y;
        // echo $y;
        echo $email .' Registered';
    }

    // registerUser('Brad');

    // Set variables with = to set a default value
    function sum($n1 = 4, $n2 = 5) {
        return $n1 + $n2;
    }

    $number = sum();
    // echo $number;

    $subtract = function($n1, $n2) {
        return $n1 - $n2;
    };

    // echo $subtract(10, 5);

    // Can set a single line function as a arrow function
    $multiply = fn($n1, $n2) => $n1 * $n2;

    echo $multiply(9,9);