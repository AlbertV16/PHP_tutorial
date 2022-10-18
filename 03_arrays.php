<?php
    // 2 ways to make arrays
    //  1. with [], or 2. with the array function
    
    // Simple Array
    $numbers = [1, 44, 55, 22];
    $fruits = array('apple', 'orange', 'pear');

    // var_dump($numbers);
    // echo $fruits[0];

    // Associative Array
    $colors = [
        1 => 'red',
        4 => 'blue',
        6 => 'green'
    ];

    // echo $colors[6];

    // Associative Array are used more with strings
    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f'
    ];

    // echo $hex['blue'];

    // Associative Arrays are also used in Databases
    $person = [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ];

    // echo $person['first_name'];

    // Multi-Dimensional Array
    $people = [
        [
            'first_name' => 'Brad',
            'last_name' => 'Traversy',
            'email' => 'brad@gmail.com'
        ],
        [
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'John@gmail.com'
        ],
        [
            'first_name' => 'Jane',
            'last_name' => 'Doe',
            'email' => 'jane@gmail.com'
        ]
    ];

    // echo $people[1]['email'];
    // Mulit-Dimensional Arrays are like JSON data

    var_dump(json_encode($people));
?>