<?php
echo "Thank you for registering the tournament!";
echo "<br>";
echo "The info you submitted:";
echo "<br>";
if ( (isset($_POST['name'])) || (isset($_POST['address']) || (isset($_POST['city']) ) || (isset($_POST['zip']) || (isset($_POST['state']) )))) {

    echo $_POST["name"];
    echo "<br>";
    echo $_POST["address"];
    echo "<br>";
    echo $_POST["city"];
    echo "<br>";
    echo $_POST["zip"];
    echo "<br>";
    echo $_POST["state"];
}

?>
