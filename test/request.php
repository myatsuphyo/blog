<?php
// Checks if the form was submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Output the contents of $_REQUEST
        foreach($_REQUEST as $key => $val) {
        echo $key, " : ", $val, "<br />";
        }
    } else {
        // If the form was not submitted, displays the form HTML
?>

<form action="request.php?submit=true" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" />
    <label for="email">Email:</label>
    <input type="text" name="email" />
    <input type="submit" name="submit" value="Register!" />
</form>

<?php } // End else statement ?>