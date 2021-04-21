<?php
$hostname = "localhost"; // this is the hostname that you can find in the PhpMyAdmin and you can write "localhost" too
$username = "root"; // be default the userName for the databases is root
$password = ""; // by default there is not password in the databases
$dbname = "restaurant" ; // here we need to write the Database name

// create connection, you need to be aware of the order of the parameters
$connect = new mysqli($hostname, $username, $password, $dbname);


// check connection
if($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}else {

    echo "Successfully Connected";

}

if(isset($_POST["submit"])){
    $dish_id = $_POST["dish_id"]; 
    $image = $_POST["image"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $meal_description = $_POST["meal_description"];

    $sql = "INSERT INTO dishes (dish_id, image, name, price, meal_description) VALUES ('$dish_id', '$image', '$name', '$price', '$meal_description')";
             // query that creates a new record in the table test. The values come from the form


    if(mysqli_query($connect, $sql) == true){ // if the query runs successfully it will show a message and a link to go back to the home page.
        echo  "New record created<br>
        <a href='connect_db.php'>Home</a>";
    }

}

?>

<!DOCTYPE html>
<html>
    <head>
    <title></title>
    </head>
    <body>
    <form method="post" >
        <input type="text"  name="dish_id" placeholder= "Dish Id">
        <input type="text"  name="image" placeholder= "image">
        <input type="text"  name="name" placeholder= "Name">
        <input type="text"  name="price" placeholder= "Price">
        <input type="text"  name="meal_description" placeholder= "Description">
        <input type="submit"  name="submit" value= "submit">
    </form>
    </body>
</html >