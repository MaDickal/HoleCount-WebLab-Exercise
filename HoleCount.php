<?php

$str = isset($_POST['string']) ? $_POST['string'] : ''; // sets $str to whatever the user entered into the text box

function countHoles($str) {
    $count = 0;
    $chars = str_split($str);
    foreach($chars as $char) {
        if ( in_array ( $char, ["B", "8", "$", "%", "&"] ) ) {
            $count += 2;
            }
        elseif ( in_array ( $char, ["A", "D", "O", "P", "Q", "R", "a", "b", "d", "e", "g", "o", "p", "q", "4", "6", "9", "0", "@", "#"] ) ) {
            $count += 1;
            }
    }

    return "'$str'" . " has " . "$count" . " holes in it.";
}

?>

<html>
<head>
    <title>Hole Count</title>
</head>
<body>
<form method="POST">
    <input type="text" name="string" /> <!-- text box on html page -->
    <input type="submit" value="Submit" />  <!-- submit button on html page -->
</form>
<h1><?= countHoles($str); ?></h1> <!-- calls up the php function -->
</body>
</html>
