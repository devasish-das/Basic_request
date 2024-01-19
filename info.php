<?php


if(isset($_GET["save"])){


    $name= $_GET["name"];
    $designation = $_GET["designation"];

    echo "Your Name is : ".$name."\n";
    echo "And you are a ".$designation;

}

if(isset($_POST["save"])){

   echo "This is a post request";
    $name= $_POST["name"];
    $designation = $_POST["designation"];

    echo "Your Name is : ".$name."\n";
    echo "And you are a ".$designation;

}

?>