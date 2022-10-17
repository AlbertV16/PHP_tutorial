<?php
/* ------ PHP Data Types -----*/
/*
- String        Series of characters surrounded by quotes
- Integer       Whole numbers
- Float         Decimal numbers
- Boolean       true or false
- Array         Special var, which can hold more than one value
- Object        A class
- NULL          Empty var
- Resource      Special var that holds a resource
*/

/* ----- Variables Rules ----- *?
/*
- Vars must be prefixed with a $
- Must start with a letter or the underscore char (_)
- Can't start with a number
- Can only contain alpha-numberic chars and underscores (A-Z, 0-9, and _)
- Are case-sensitive ($name and $NAME are 2 different vars)
*/

$name = 'Brad'; // String
$age = 40; // Int
$has_kids = false; // Boolean
$cash_on_hand = 20.75; // Float

// var_dump($cash_on_hand);

// need to concatenate to add variables to sentences
// . is used instead of +
// echo $name . ' is ' . $age . ' years old';

// Double quotes "" work with vars
// Recommend using ${var_name} within double quotes, sticks out more
// echo "${name} is ${age} years old";

// arithmetic will always add, even is number is a string
$x = '5' + '5';
/* var_dump($x);
echo 10 - 5;
echo 5 * 6;
echo 10 / 2;
echo 10 % 3; */

// How to create constant var
// use define function: define('var_name', 'value')
// Convention for var name is all UPPERCASE
define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;
?>