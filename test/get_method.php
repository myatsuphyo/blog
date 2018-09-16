<ul id="menu">
    <li> <a href="test.php">Home</a> </li>
    <li> <a href="test.php?page=about">About Us</a> </li>
    <li> <a href="test.php?page=contact">Contact Us</a> </li>
</ul>

<?php

/*
* Very basic security measure to ensure that
* the page variable has been passed, enabling you to
* ward off very basic mischief using htmlentities()
*/

if(isset($_GET['page'])) {
    $page = htmlentities($_GET['page']);
} else {
    $page = NULL;
}

switch($page) {
    case 'about':
    echo "
        <h1> About Us </h1>
        <p> We are rockin' web developers! </p>";
    break;

    case 'contact':
    echo "
    <h1> Contact Us </h1>
        <p> Email us at
            <a href=\"mailto:info@example.com\">
                info@example.com
            </a>
        </p>";
    break;
/*
* Create a default page in case no variable is passed
*/
    default:
    echo "
    <h1> Select a Page! </h1>
        <p>
            Choose a page from above to learn more about us!
        </p>";
    break;
} 
?>