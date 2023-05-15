<?php

$con = mysqli_connect('localhost','root','');
if(!$con)
{
    echo 'Not Connected To Server';
}
if(!mysqli_select_db($con, 'project'))
{
    echo 'Database Not Selected';
}

$name = $_POST['Name'];
$price = $_POST['Price'];
$image = $_POST['Image'];

$sql = "INSERT INTO cart_item (name, price, image) VALUES ('$name','$price','$image')";

if(!mysqli_query($con,$sql))
{
    echo 'Not Inserted';
}
else
{
    echo 'Inserted';
}
header("refresh:2; url=input.html");
?>