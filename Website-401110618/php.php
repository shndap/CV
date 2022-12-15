<?php

if( isset($_POST["smit"]))
    {
    $S = "name: " . $_POST["name"] . "\nEmail: " . $_POST["mail"] . "\nMessage: " . $_POST["cntnt"];

    $fcnt = count(glob("Messages/*.txt"));
    $npath = "Messages/". ($fcnt + 1) . ".txt";

    $fp = fopen($npath, "a");
    fwrite($fp, $S);
    fclose($fp);

    echo "Message Sent Successfully!";
}

?>