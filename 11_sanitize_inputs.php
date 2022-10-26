<?php
/* ----- $_GET & $_POST Superglobals -----*/

/* We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

// echo $_GET['name'];
// echo $_GET['age'];

// Currently if someone puts in a script, it will get echo'd out to page. Can be dangerous. Need to protect
// One way around it is to use variables and htmlspecialchars()
// Other ways - filter_input
if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = htmlspecialchars($_POST['age']);
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    // $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    // Another option
    echo $name;
}
?>

<?php // $_SERVER can also be vulnerable
// Can surround $_SERVER to be safe?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>