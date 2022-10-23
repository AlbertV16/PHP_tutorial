<?php
    $fruits = ['apple', 'orange', 'pear'];

    // Get length
    // echo count($fruits);

    // Search array
    // var_dump(in_array('apple', $fruits));


    // Add to array
    $fruits[] = 'grape';
    // Add to end of array
    array_push($fruits, 'blueberry', 'strawberry');
    // Add to start of array
    array_unshift($fruits, 'mango');

    // Remove from array
    // Remove from end of array
    array_pop($fruits);
    // Remove from end
    array_shift($fruits);
    // Remove index and arg in array
    // unset($fruits[2]);

    // Split into 2 chunks
    // $chunked_array = array_chunk($fruits, 3);

    // print_r($chunked_array);

    // print_r($fruits);

    // Concatenate Arrays
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];

    $arr3 = array_merge($arr1, $arr2);
    $arr4 = [...$arr1, ...$arr2];
    // Spread operator ... (3 dots)

    // print_r($arr4)

    $a = ['green', 'red', 'yellow'];
    $b = ['avacado', 'apple', 'banana'];

    // Create key-value arrays
    $c = array_combine($a, $b);

    // print_r($c);

    // To get just the keys into an array
    $keys = array_keys($c);
    // print_r($keys);

    // Flip key-value arrays
    $flipped = array_flip($c);
    // print_r($flipped);

    $numbers = range(1, 30);

    // print_r($numbers);

    // Use values in an array to map to another value in a new array
    $newNumbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);

    // print_r($newNumbers);

    // Get an array that filters the inputted array
    // Uses a function
    $lessThan10 = array_filter($numbers, fn($number) => $number <= 10);

    // print_r($lessThan10);

    // array_reduce - good for things like adding all the numbers together
    // function requires a $carry (holds the return value of the previous iteration)
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

    var_dump($sum);
?>