<?php


$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$skills = $_POST['skill'];
$username = $_POST['username'];
$password = $_POST['password'];
$department = $_POST['department'];


    echo "the input is : "."<br>";
    echo "First Name: ".$fname."<br>";
    echo "Last Name: ".$lname."<br>";
    echo "Address: ".$address."<br>";
    echo "Your Skills: ";
    foreach($skills as $skill){
        echo $skill . "\n";
    }
    echo "<br>";
    echo "Department: ".$department;
    echo "<br>";
    echo "Gender: ".$gender."<br>";
    echo "Password: ".$password."<br>";
    echo "username: ".$username."<br>";
  

?>