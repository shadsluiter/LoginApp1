<?php

// get the values from the submitted form.
$attempted_username = $_GET['username'];
$attempted_password = $_GET['pass'];

// define possible login pairs.  This would usually come from a database.
$legalLogins = [ 
    ['admin', 'somepass'], 
    ['vicky', 'pa$$word'], 
    ['me', 'you'] 
];


// assume the login fails first
$loggedin = FALSE;

// check attempt to all legal pairs of values
foreach ($legalLogins as $x ) {
    if ($x[0] == $attempted_username && $x[1] == $attempted_password)  {
        $loggedin = TRUE;
    }
}

// if a match was found then proceed, otherwise reject the login.
if ($loggedin == TRUE) {
    echo "You have been logged in as " . $attempted_username . "<br>";
    echo "click <a href='securepage.php'>Here</a> to continue<br>";
}
else {
    echo "Access denied!";
}

?>