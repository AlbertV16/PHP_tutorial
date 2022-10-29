<?php
/* ----- Sessions ----- */
/*
    Sessions are a way to store info (in variables) to be used across multiple pages.
    Unlike cookies, sessions are stored on the server.
*/

// To use session values, we need have the session started
// and to use session values, 'session_start' needs to be on all files using session values
session_start();

if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST['password'];

    // If username and password match, keep username and direct user to the Location: ... 
    if($username == 'john' && $password == 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php_tutorial/extras/dashboard.php');
    } else {
        echo 'Incorrect Login';
    }
}
?>

<?php // $_SERVER can also be vulnerable
// Can surround $_SERVER to be safe?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>